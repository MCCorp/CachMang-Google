<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CachMangResults;
use App\CachMangKeyword;
use Illuminate\Support\Facades\Input;

use Serps\SearchEngine\Google\GoogleClient;
use Serps\HttpClient\CurlClient;
use Serps\SearchEngine\Google\GoogleUrl;
use Serps\Core\Browser\Browser;
use Serps\Core\Http\Proxy;
use Jenssegers\Agent\Agent;
use Cache;

class CachMangController extends Controller
{
	

	private $seo_config;
	public function getSeoConfig() {
		if(empty($this->seo_config)) {
			$domain = DOMAIN_HOST;
			$seoConfig = config('seo.domains_config');
			if(empty($seoConfig[$domain])) $seoConfig = [];
			else $seoConfig = $seoConfig[$domain];
			$this->seo_config = $seoConfig;
		}
		return $this->seo_config;
	}
	public function chiaKeywords($arr, $col) {
		$lenSitemap = count($arr);
		$splitSitemap = (Int)($lenSitemap/$col);
		if($splitSitemap>0)
			return array_chunk($arr, $splitSitemap);
		else return $arr;
	}
    public function index() {
		$seoConfig = $this->getSeoConfig();
		try {
			if(empty($seoConfig)) {
				$seo = [
					'title' => "Search anything with " . url('/'),
					'description' => ""
				];
			}else {
				$seo = $seoConfig['home'];
			}
        $data['seo'] = $seo;

        $domain = DOMAIN_HOST;
		//$siteSetting = config('theme.domains_config')[$domain];
		//if(empty($siteSetting['disable_cat_home'])) {
			$dmConfig = config('home.domains_config')[$domain];
			if(!empty($dmConfig['sitemap_keyword'])) {
				$sitemapKeyword = $dmConfig['sitemap_keyword'];
				$data['allKeywords'] = $sitemapKeyword;
				$lenSitemap = count($sitemapKeyword);
				$splitSitemap = (Int)($lenSitemap/4);
				$data['sitemap_keyword'] = array_chunk($sitemapKeyword, $splitSitemap+1);
				
				$data['top_keywords'] = $this->chiaKeywords(array_slice($sitemapKeyword, 0, 48), 6);
				$data['second_keywords'] = $this->chiaKeywords(array_slice($sitemapKeyword, 47, 20), 4);
				$data['desc_search'] = !empty($dmConfig['desc_search'])? $dmConfig['desc_search']:'';
			}
		//}

        $data['cityName'] = CITY;
        $data['hiddenSearchHeader'] = 1;
        $agent = new Agent();
        $isPhone = $agent->isPhone();
        $isTablet = $agent->isTablet();
		if($isPhone || $isTablet) return view('home-amp')->with($data);
		} catch(Exception $e) {
			$exitCode = \Artisan::call('cache:clear');
		}
        return view('home')->with($data);
    }

    public function search(Request $request) {
        $q = Input::get('q');
        if(env('KEYWORD') && stripos(strtolower($q), env('KEYWORD')) === false){
            $q = $q . ' ' . env('KEYWORD');
        }
        $q = str_replace(' ', '-', $q);
        return redirect('/' . $q);
    }

    public function searchMobile(Request $request) {
        $q = $request->all()['q'];
        $q = $this->cleanSpecialChars($q);
        return redirect('/' . $q);
    }

    public function query($q, Request $request) {
		$rq = $request->all();
		
        if(empty($q))
            return redirect('/' . $q);
		if(env('KEYWORD') && !have_detect_keywords($q)){
			$q = str_slug($q . ' ' . env('KEYWORD'));
			return redirect('/' . $q);
		}
        $q = $this->cleanSpecialChars($q);
		
		$store_name = ucwords(str_replace(['-','coupon'],[' ',''], $q));
		
		//domain config
		$domain = $_SERVER['HTTP_HOST'];
        $dmConfig = config('theme.domains_config')[$domain];

        /* insert custom results */
        $customSearch = config('custom-search.config');
        $customResults = [];
        $q = strtolower($q);
        if( !empty( $customSearch[$q] ) ){
            foreach ($customSearch[$q] as $cs) {
                array_push($customResults, $cs);
            }
        }

        /* Using Laravel cache */
        $cacheKey = 'kw_' . $q;
		if(Cache::has($cacheKey)){
            $d = Cache::get($cacheKey);
            if(empty($d['results'])){
				$exitCode = \Artisan::call('cache:clear');
                Cache::forget($cacheKey);
            }
        }
        if(!empty($rq['clear-cache'])) {
            Cache::forget($cacheKey);
            $this->getCurlHtml($this->apiUrlClear . str_replace('-', '+', $q));
        }
        $data = Cache::remember('kw_' . $q, 60*24, function() use ($q){
			$exitCode = \Artisan::call('cache:clear');
            return $this->getFromSearchEngine($q);
        });
        /* End using Laravel cache */

        /* Using API Nightmare cache */
        //$data = $this->getFromSearchEngine($q);

        /* remove unwanted results */
        if(is_array($data['results']) && sizeof($data['results']) > 0){
            foreach ($data['results'] as $k=>$r) {
                if(strpos($r['url'], 'couponupto.com') !== false){
                    unset($data['results'][$k]);
                }
            }
        }
        $data['results'] = array_merge($customResults, $data['results']);
		//use for popular or recently
		
        $domain = DOMAIN_HOST;
		$dmHomeConfig = config('home.domains_config')[$domain];
		if(!empty($dmHomeConfig['sitemap_keyword'])) {
			$data['sitemap_keyword'] = $dmHomeConfig['sitemap_keyword'];
			$arrKeys = array_keys($dmHomeConfig['sitemap_keyword']);
			$data['popularSearch'] = array_rand($arrKeys, 5);
			$arrKeys_diff = array_diff($arrKeys, $data['popularSearch']);
			$data['recentlySearch'] = array_rand($arrKeys_diff, 5);
			$data['trendingSearch'] = $this->chiaKeywords(array_slice($arrKeys, -20), 4);
		}
        /* SEO */
		$seoConfig = $this->getSeoConfig();
		if(empty($seoConfig)) {
			$seo = [
				'title' => $store_name,
				'description' => 'Search results for keyword ' . $q
			];
		}else {
			$seoConfig = $seoConfig['results'];
			$seoTitle = $seoConfig['title'][rand(0, count($seoConfig['title'])-1)];
			$seoDescription = $seoConfig['description'];
			
			//remove duplicate "coupon"
			$cp_in_store = stripos($store_name, 'coupon');
			$cp_in_title = stripos($seoTitle, 'coupon');
			if($cp_in_store!==false) $seoTitle = str_ireplace(['coupon'],[''], $seoTitle);
			
			$seoTitle = str_replace('[storename]', $store_name, $seoTitle);
			$seoDescription = str_replace('[storename]', $store_name, $seoDescription);
			$seo = [
				'title' => $seoTitle,
				'description' => $seoDescription
			];
		}
        if(!empty($data[0])){
            $seo['description'] .= ' ' . $data[0]['description'];
        }

        $data['seo'] = $seo;
        /* Get recently search keywords */
//        $data['recentlySearch'] = CachMangKeyword::orderBy('updated_at', 'DESC')->limit(9)->get(['keyword_text','kw_slug']);
//        $data['topSearch'] = CachMangKeyword::orderBy('number_search', 'DESC')->limit(9)->get(['keyword_text','kw_slug','number_search']);

//        $date = new Carbon();
//        $date->subDay(1);
//        $data['lastSearch24h'] = CachMangKeyword::where('updated_at', '>', $date->toDateTimeString() )->limit(9)->orderBy('updated_at','DESC')->get(['keyword_text','kw_slug','updated_at']);
        $data['hiddenSearchHeader'] = 0;
		/* setting result */
		//ads top result
		$data['enable_ads'] = 1;
		$data['ads_count'] = 3;
		if(isset($dmConfig['enable_ads'])) $data['enable_ads'] = $dmConfig['enable_ads'];
		if(empty($dmConfig['ads'])) {
			$data['ads'] = config('domains.' . ASSET_DOMAIN)['ads'];
		}else {
			$data['ads'] = $dmConfig['ads'];
			$data['ads_count'] = 10;
		}
		
		if(!empty($data['ads'])) foreach($data['ads'] as $k=>$v) {
			$data['ads'][$k]['title'] = str_replace('[store_name]', $store_name, $v['title']);
		}
		//rel link extenal
		$data['rel_ex'] = 'rel="nofollow"';
		//limit item result search engine
		$limit = 20;
		if(!empty($dmConfig['limit_result'])) $limit = $dmConfig['limit_result'];
		$data['results'] = array_slice($data['results'], 0, $limit);
		// add result fake
		$rsTitleFake = $this->render_rand_rs(config('results.add_fake_title'));
		$rsDescFake = $this->render_rand_rs(config('results.add_fake_desc'));
		
		foreach($rsTitleFake as $k=>$titleFake) {
			$arr_range = array_map(function($c) { return $c.'%';}, range(60,100,5));
			$value =  $arr_range[rand(0, count($arr_range)-1)];
			$data['results'][] = [
				'title' => str_replace('[store_name]', $store_name, $titleFake),
				'description' => str_replace(['[store_name]', '[value]'], [$store_name, $value], $rsDescFake[$k]),
				'url' => '',
				'type' => 'fake'
			];
			
		}
		
		
        $agent = new Agent();
        $isPhone = $agent->isPhone();
        $isTablet = $agent->isTablet();
        //if(0) 
		if($isPhone || $isTablet){
            return view('results-amp')->with($data);
        }
        return view('results')->with($data);
    }
//func help
	public function render_rand_rs($arr, $limit = 10) {
		$arr_rand = array_rand($arr, $limit);
		$rs = [];
		foreach($arr_rand as $v) {
			$rs[] = $arr[$v];
		}
		return $rs;
	}
    /* Get result from search engine */
    public function getFromSearchEngine($q) {
        /* Get from Google with random API
//            $randKey = array_rand($apiServers, 1);
//            $randomOneServer = $apiServers[$randKey];
//            if($randomOneServer === 'localhost'){
//                $data = (array)json_decode($this->api($q));
//            }else{
//                $data = (array)json_decode(file_get_contents($randomOneServer . '/api/' . $q));
//                $data['seo'] = $seo;
//            }
        */

//        $data['ask'] = $this->_ask($q);
//        $data['bing'] = $this->_bing($q);
        //$data['bing'] = $this->_yahoo($q);
		$data['all'] = $this->getFromApiNodejs($q);
//        return $data;
        /*$data['dogpile'] = $this->getData('dogpile.com', $q);
        $data['netfind'] = $this->getData('netfind.com', $q);
        $data['norton'] = $this->getData('search.norton.com', $q);
        $data['myway'] = $this->getData('int.search.myway.com', $q);
        $data['infospace'] = $this->getData('infospace.com', $q);*/

//            $data['ask'] = $this->getData('ask.com', $q);
        /* Error 503 service */
//            $data['findgofind'] = $this->getData('findgofind.co', $q);

        $items = $suggestKw = [];
        foreach ($data as $datum) {
            if(!empty($datum['items'])){
                foreach ($datum['items'] as $item) {
                    array_push($items, $item);
                }
            }
            if(!empty($datum['block']['suggestion'])){
                array_push($suggestKw, $datum['block']['suggestion']);
            }
        }
        /* $suggestKw to array */
        $arrSuggest = [];
        if($suggestKw){
            foreach ($suggestKw as $item) {
                $arrSuggest = array_merge($arrSuggest, explode(',',$item));
            }
        }
        /* Get more suggest kw from Google api */
        //$suggestFromGoogleApi = $this->getGoogleSuggestSearch($q, false);
        //$arrSuggest = array_merge($arrSuggest, $suggestFromGoogleApi);
        /* remove duplicate from array */
        $arrSuggest = array_unique($arrSuggest);
        $data = [
            'related' => $arrSuggest,
            'results' => $items,
            'q' => str_replace('-', ' ', $q)
        ];
        return $data;
    }

    function cleanSpecialChars($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
	
	function getCurl($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch,CURLOPT_COOKIESESSION,false);
        if(env('USE_PROXY') === 'yes'){
            $proxies = explode('|', env('PROXIES'));
            $randKey = array_rand($proxies, 1);
            $randomOneProxy = $proxies[$randKey];
            $proxy = 'https://' . $randomOneProxy;
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
        }
		curl_setopt($ch, CURLOPT_HEADER,false);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, false);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:37.0) Gecko/20100101 Firefox/37.0");

	   $htm = curl_exec($ch);
		curl_close($ch);
		return $htm;
	}
    public function getHtml($url) {
		$html_get = $this->getCurl($url);
        $html = new \Htmldom();
        $html->load($html_get);
        return $html;
    }

    public function getCurlHtml($url, $ref='') {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 0);
        if($ref) curl_setopt($ch, CURLOPT_REFERER, $ref);
        curl_setopt($ch, CURLOPT_COOKIESESSION, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0");
		curl_setopt($ch, CURLOPT_TIMEOUT, 30000);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $html = curl_exec($ch);
        curl_close($ch);
        //echo ($html);exit;
        return $html;
    }

    /* Search engines */
    public function _yahoo($q) {
        $q = str_replace('-','+',$q);
        $path = 'https://search.yahoo.com/search?p=' . $q;
        $html = $this->getHtml($path);
//        $html = file_get_contents($path);
//        return $html;

        $arrResults = [];
        foreach($html->find('.algo') as $result){
            $a = [];
            if($result->find('h3', 0)) {
                $a['title'] = trim($result->find('h3', 0)->plaintext);
                if($result->find('.compText', 0)){
                    $a['description'] = trim($result->find('.compText', 0)->plaintext);
                }else{
                    $a['description'] = '';
                }
                $a['url'] = trim($result->find('.fz-ms', 0)->plaintext);
                array_push($arrResults, $a);
            }
        }

        $arrRelate = [];
        foreach ($html->find('.b_rrsr .b_vList') as $list) {
            foreach ($list->find('li') as $li){
                if($li->plaintext){
                    array_push($arrRelate, $li->plaintext);
                }
            }
        }
        $data = [
            'items' => $arrResults,
            'block' => [
                'suggestion' => join(',',$arrRelate)
            ],
//            'q' => str_replace('+', ' ', $q),
//            'from' => 'BING'
        ];
        return $data;
    }
    /*public function _bing($q) {
        $q = str_replace('-','+',$q);
        $path = 'https://www.bing.com/search?q=' . $q;
        $html = $this->getHtml($path);
//        $html = file_get_contents($path);
//        return $html;

        $arrResults = [];
        foreach($html->find('.b_algo') as $result){
            $a = [];
            if($result->find('h2>strong', 0)){
                $a['title'] = trim($result->find('h2>a', 0)->plaintext);
                if($result->find('.b_caption>p', 0)){
                    $a['description'] = trim($result->find('.b_caption>p', 0)->plaintext);
                }else{
                    $a['description'] = '';
                }
                $a['url'] = trim($result->find('.b_caption>cite', 0)->plaintext);
                array_push($arrResults, $a);
            }
        }

        $arrRelate = [];
        foreach ($html->find('.b_rrsr .b_vList') as $list) {
            foreach ($list->find('li') as $li){
                if($li->plaintext){
                    array_push($arrRelate, $li->plaintext);
                }
            }
        }
        $data = [
            'items' => $arrResults,
            'block' => [
                'suggestion' => join(',',$arrRelate)
            ],
//            'q' => str_replace('+', ' ', $q),
//            'from' => 'BING'
        ];
        return $data;
    }*/

    public function _google($q) {
        /* Get random proxy */
        $proxies = explode('|', env('PROXIES'));
        $randKey = array_rand($proxies, 1);
        $randomOneProxy = $proxies[$randKey];
        $proxy = 'https://' . $randomOneProxy;
        /* Get from google */
        $userAgent = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36";
        $browserLanguage = "en-US";

        /* using proxy */
        //45.63.10.83:43828
//        $strProxyProtocol = 'https://';
//        $strProxyIp = '199.115.116.233';
//        $strProxyPort = '1000';
//        $strProxyProtocol = 'socsk5://haiht369:eijtierorr@';
//        $strProxyIp = '45.63.10.83';
//        $strProxyPort = '43829';
//        $proxy = Proxy::createFromString($strProxyProtocol . $strProxyIp . ':' . $strProxyPort);
//        $proxy = 'https://199.115.116.233:1022';
        $proxy = Proxy::createFromString($proxy);
        if(env('USE_PROXY','no') === 'yes'){
            $browser = new Browser(new CurlClient(), $userAgent, $browserLanguage, null, $proxy);
        }elseif(env('USE_PROXY', 'no') === 'no'){
            $browser = new Browser(new CurlClient(), $userAgent, $browserLanguage, null);
        }

        /*  */

//        $browser = new Browser(new CurlClient(), $userAgent, $browserLanguage);
        // Create a google client using the browser we configured
        $googleClient = new GoogleClient($browser);
        // Create the url that will be parsed
        $googleUrl = new GoogleUrl();
        $q = str_replace('-', ' ', $q);
        $q = str_replace('%', '', $q);
        $googleUrl->setParam('q', $q);
        $googleUrl->setAutoCorrectionEnabled(true);
        $googleUrl->setResultsPerPage(env('GOOGLE_RESULT_PER_PAGE'));
        $relatedSearches = [];
        $results = [];
        try{
            $response = $googleClient->query($googleUrl);
            $results = $response->getNaturalResults();
            $relatedSearches = $response->getRelatedSearches();
        }catch (\Exception $ex){
            $this->_google($q);
        }
        $data = [
            'related' => $relatedSearches,
            'results' => $results,
            'q' => str_replace('-', ' ', $q),
            'from' => 'SERP'
        ];
        return $data;
    }

    public function _ask($q) {
        $path = 'https://www.ask.com/web?q=' . $q;
        $html = new \Htmldom($path);

        $arrResults = [];
        foreach($html->find('.PartialSearchResults-item') as $result){
            $a = [];
            if($result->find('.PartialSearchResults-item-title', 0)){
                $title = trim($result->find('.PartialSearchResults-item-title', 0)->plaintext);
                if($title){
                    $a['title'] = $title;
                }
            }
            if($result->find('.PartialSearchResults-item-url', 0)){
                $url = trim($result->find('.PartialSearchResults-item-url', 0)->plaintext);
                if($url){
                    $a['url'] = $url;
                }
            }
            if($result->find('.PartialSearchResults-item-abstract', 0)){
                $desc = trim($result->find('.PartialSearchResults-item-abstract', 0)->plaintext);
                if($desc){
                    $a['description'] = $desc;
                }
            }
            $a['source'] = 'ask.com';
            array_push($arrResults, $a);
        }

        $arrRelate = [];
        foreach ($html->find('.PartialRelatedSearch-item') as $result) {
            /*$a = [];
            $a['title'] = trim($result->find('.PartialRelatedSearch-item-link',0)->plaintext);
            $a['url'] = trim($result->find('.PartialRelatedSearch-item-link',0)->href);*/
            array_push($arrRelate, trim($result->find('.PartialRelatedSearch-item-link',0)->plaintext));
        }
        $data = [
//            'related' => $arrRelate,
//            'results' => $arrResults,
//            'q' => str_replace('-', ' ', $q),
//            'from' => 'ASK',
            'items' => $arrResults,
            'block' => [
                'suggestion' => !empty($arrRelate) ? join(',',$arrRelate):''
            ],
        ];
        return $data;
    }

    public function api($q) {
        /* Get from google */
        $userAgent = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36";
        $browserLanguage = "en-US";

        $browser = new Browser(new CurlClient(), $userAgent, $browserLanguage);
        // Create a google client using the browser we configured
        $googleClient = new GoogleClient($browser);
        // Create the url that will be parsed
        $googleUrl = new GoogleUrl();
        $q = str_replace('-', ' ', $q);
        $googleUrl->setParam('q', $q);
        $googleUrl->setAutoCorrectionEnabled(true);
        $googleUrl->setResultsPerPage(env('GOOGLE_RESULT_PER_PAGE'));

        $response = $googleClient->query($googleUrl);

        $results = $response->getNaturalResults();
        $arrResults = [];
        if($results){
            foreach ($results as $result) {
                if($result->is('classical')){
                    $a = [];
                    $a['title'] = $result->title;
                    $a['url'] = $result->url;
                    $a['destination'] = $result->destination;
                    $a['description'] = $result->description;
                    array_push($arrResults, $a);
                }
            }
        }
        $relatedSearches = $response->getRelatedSearches();
        $arrRelate = [];
        if($relatedSearches){
            foreach ($relatedSearches as $result) {
                $a = [];
                $a['title'] = $result->title;
                $a['url'] = $result->url;
                array_push($arrRelate, $a);
            }
        }
        $data = [
            'related' => $arrRelate,
            'results' => $arrResults,
            'q' => str_replace('-', ' ', $q),
            'from' => 'SERP'
        ];
        return json_encode($data);
    }

    /*  */
    public $data_config = [];
    public function getConfig($action='config') {
        if(isset($this->data_config[$action])===false)
            $this->data_config[$action] = config('search.'.$action);
        return $this->data_config[$action];
    }

    public function detectFunc($needDetect, $item='', $item2='') {
        if(is_callable($needDetect)) return $needDetect($item, $item2);
        else return $needDetect;
    }

    public function getDomHtml($url, $ref='') {
        $htmldom = new \Htmldom();
        $htmldom->load($this->getCurlHtml($url,$ref));
        return $htmldom;
    }

    public function getData($domainGet, $q='') {
        $q = urlencode($q);
        $dataConfig = $this->getConfig();
        if(isset($dataConfig[$domainGet])===false) return [];

        $thisData = $dataConfig[$domainGet];
        //to call back, function closure, limit is 2 level of array [ [ [] ] ], can config ['func' => function($arg) { $this->. .... }]
        foreach($thisData as $k=>$v) {
            if(!is_array($v)) {
                if(is_callable($v)) {
                    $getXCB = $v->bindTo($this, get_class($this));
                    $thisData[$k] = $getXCB;
                }
            }else {
                foreach($v as $i=>$s) {
                    if(!is_array($s)) {
                        if (is_callable($s)) {
                            $getXCB = $s->bindTo($this, get_class($this));
                            $thisData[$k][$i] = $getXCB;
                        }
                    }else {
                        foreach($s as $j=>$h)
                            if (is_callable($h)) {
                                $getXCB = $h->bindTo($this, get_class($this));
                                $thisData[$k][$i][$j] = $getXCB;
                            }
                    }
                }
            }
        }

        if(isset($thisData['result'])) return $thisData['result']($q);
        if(!$thisData['url']) return [];
        $url = str_replace('[q]', $q, $this->detectFunc($thisData['url'], $q) );
        $html = $this->getDomHtml($url, isset($thisData['ref'])?$thisData['ref']:'');
        if(isset($thisData['useTamp']['html'])) $this->dataTamp['html'] = $html;
        //box item setting
        if(is_callable($thisData['box'])) $itemTop = $thisData['box']($html);
        else if(!isset($thisData['box']['find'])) $itemTop = $html->find($thisData['box']);
        else {
            if (isset($thisData['box']['parent'])) {
                $itemTop = $html->find($thisData['box']['parent'], isset($thisData['box']['pindex'])?$thisData['box']['pindex']:0);
                if($itemTop) $itemTop = $itemTop->find($thisData['box']['find']);
            }else $itemTop = $html->find($thisData['box']['find']);
        }

        //cant get box item -> log file error
        if(!$itemTop) {
            return [];
        }

        //get data item
        $arr = [];
        $issetIgnore = isset($thisData['get']['ifignore']);
        foreach($itemTop as $k=>$items) {
            $a = [];
            if($issetIgnore&&$thisData['get']['ifignore']($items)) continue;//bo qua ko get items neu item...
            $thisDataGet = $thisData['get'];
            if($issetIgnore) unset($thisDataGet['ifignore']);

            foreach($thisDataGet as $name=>$v) {
                if(!$v)
                    $a[$name] = '';
                else if(is_array($v)){
                    if (isset($v['this'])) $a[$name] = $items;
                    else $a[$name] = $items->find($v['find'], isset($v['index'])?$v['index']:0);
                    if (isset($v['func']) && is_callable($v['func'])) {
                        if ($a[$name]) $a[$name] = $v['func']($a[$name]);
                        else $a[$name] = '';
                    }else if($a[$name]) $a[$name] = isset($v['attr']) ? $a[$name]->{"{$v['attr']}"} : $a[$name]->plaintext;
                    else $a[$name] = '';
                }else {
                    $a[$name] = $items->find($v,0);
                    if($a[$name]) $a[$name] = $a[$name]->plaintext;
                    else $a[$name] = '';
                }
                $a[$name] = trim($a[$name]);
                $a['source'] = $domainGet;
            }
            if(isset($a['title']{0})) array_push($arr, $a);
        }
        $a = [];
        if(isset($thisData['block'])):
            $items = $html;
            foreach($thisData['block'] as $name=>$v) {
                if(!$v)
                    $a[$name] = '';
                else if(is_array($v)){
                    $a[$name] = $items->find($v['find'], isset($v['index'])?$v['index']:0);
                    if (isset($v['func']) && is_callable($v['func'])) {
                        if ($a[$name]) $a[$name] = $v['func']($a[$name]);
                        else $a[$name] = '';
                    }else if($a[$name]) $a[$name] = isset($v['attr']) ? $a[$name]->{"{$v['attr']}"} : $a[$name]->plaintext;
                    else $a[$name] = '';
                }else {
                    $a[$name] = $items->find($v,0);
                    if($a[$name]) $a[$name] = $a[$name]->plaintext;
                    else $a[$name] = '';
                }
                $a[$name] = trim($a[$name]);
            }
        endif;
        $result = ['items' => $arr, 'block' => $a];
        return $result;
    }

    /* Save to keyword */
    public function save(Request $request) {
        $relatedKeywords = Input::get('relatedKeywords');
        if(!is_array($relatedKeywords) || count($relatedKeywords) === 0)
            return '0';
        $findExistedRecords = CachMangKeyword::whereIn('keyword_text', $relatedKeywords)->pluck('keyword_text')->all();
        $insertThem = [];
        // find records not exist in db
        foreach ($relatedKeywords as $r) {
            if(!in_array($r, $findExistedRecords)){
                array_push($insertThem, $r);
            }
        }
        if(count($insertThem) > 0){
            foreach ($insertThem as $item) {
                $charges[] = [
                    'keyword_text' => $item,
                    'kw_slug' => str_slug($item),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            }
            $rs = CachMangKeyword::insert($charges);
            return count($insertThem);
        }
        return '0';
        /*  */
        /*$currentKeyword = Input::get('currentKeyword');
        $relatedKeywords = Input::get('relatedKeywords');
        $relatedKeywords = !empty($relatedKeywords) ? join(',',$relatedKeywords) : '';
        $parentKeywordId = $this->saveKeyword($currentKeyword, $relatedKeywords);

        $results = json_decode(Input::get('results'));
        $arrTitles = [];
        foreach ($results as $result) {
            array_push($arrTitles, $result->title);
        }
        $findExistedRecords = CachMangResults::whereIn('title', $arrTitles)->pluck('title')->all();
        $insertThem = [];
        // find records not exist in db
        foreach ($results as $r) {
            if(!in_array($r->title, $findExistedRecords)){
                array_push($insertThem, $r);
            }
        }
        if(count($insertThem) > 0){
            foreach ($insertThem as $item) {
                $charges[] = [
                    'title' => $item->title,
                    'description' => $item->description,
                    'url' => !empty($item->url) ? $item->url : '',
                    'keyword_id' => $parentKeywordId,
                    'other_related_keywords' => $relatedKeywords,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            }
            $rs = CachMangResults::insert($charges);
            return count($insertThem) . ' records inserted';
        }
        return '0 records inserted';*/
    }

    public function saveMany(Request $request) {
        $currentKeyword = Input::get('currentKeyword');
        $relatedKeywords = Input::get('relatedKeywords');
        $parentKeywordId = $this->saveKeyword($currentKeyword, $relatedKeywords);
        $results = json_decode(Input::get('results'));
        $arrTitles = [];
        foreach ($results as $result) {
            array_push($arrTitles, $result->title);
        }
        $findExistedRecords = CachMangResults::whereIn('title', $arrTitles)->pluck('title')->all();
        $insertThem = [];
        // find records not exist in db
        foreach ($results as $r) {
            if(!in_array($r->title, $findExistedRecords)){
                array_push($insertThem, $r);
            }
        }
        if(count($insertThem) > 0){
            foreach ($insertThem as $item) {
                $charges[] = [
                    'title' => $item->title,
                    'description' => $item->description,
                    'url' => $item->url,
                    'keyword_id' => $parentKeywordId,
                    'other_related_keywords' => $relatedKeywords,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            }
            $rs = CachMangResults::insert($charges);
            return count($insertThem) . ' records inserted';
        }
        return '0 records inserted';
    }

    public function saveKeyword($kw, $relatedKeywords) {
        $find = CachMangKeyword::where('keyword_text','=',$kw)->first(['id']);
        if($find){
            $find->touch();
            return $find->id;
        }else{
            $obj = new CachMangKeyword();
            $obj->keyword_text = $kw;
            $obj->related_keywords = $relatedKeywords;
            $obj->kw_slug = str_slug($obj->keyword_text);
            $obj->save();
            return $obj->id;
        }
    }

    /* Static pages */
    public function term() {
        $seo = [
            'title' => 'Term',
            'description' => env('SEO_META_DESCRIPTION')
        ];
        $data['seo'] = $seo;
        return view('term_policy.term')->with($data);
    }

    public function policy() {
        $seo = [
            'title' => 'Policy',
            'description' => env('SEO_META_DESCRIPTION')
        ];
        $data['seo'] = $seo;
        return view('term_policy.policy')->with($data);
    }

    public function contact() {
        $seo = [
            'title' => 'Contact',
            'description' => env('SEO_META_DESCRIPTION')
        ];
        $data['seo'] = $seo;
        return view('contact')->with($data);
    }
}