<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <title>Jumbotron Template for Bootstrap</title>
    <link rel="canonical" href="https://uncompiled.github.io/amp-bootstrap/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="Sample Bootstrap Site">
    <meta name="author" content="Web Developer">

    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/images/favicon/') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/images/favicon/') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/images/favicon/') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/images/favicon/') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/images/favicon/') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/images/favicon/') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/images/favicon/') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/images/favicon/') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/images/favicon/') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/images/favicon/') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/') }}/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('/images/favicon/') }}/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/images/favicon/') }}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- AMP boilerplate -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <!-- Bootstrap core CSS is replaced with amp-custom style tag -->
    <style amp-custom>/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}details,footer,header,main,nav{display:block}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}h1{margin:.67em 0;font-size:2em}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}button{margin:0;font:inherit;color:inherit}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button;cursor:pointer}button[disabled]{cursor:default}button::-moz-focus-inner{padding:0;border:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000;text-shadow:none;background:0 0;-webkit-box-shadow:none;box-shadow:none}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn[disabled]{cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;opacity:.65}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active:focus,.btn-default:active:hover{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default:active{background-image:none}.btn-default[disabled]:focus,.btn-default[disabled]:hover{background-color:#fff;border-color:#ccc}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active:focus,.btn-primary:active:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary:active{background-image:none}.btn-primary[disabled]:focus,.btn-primary[disabled]:hover{background-color:#337ab7;border-color:#2e6da4}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link:active,.btn-link[disabled]{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover{color:#777;text-decoration:none}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.collapse{display:none}.nav{padding-left:0;margin-bottom:0;list-style:none}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block;height:auto;padding-bottom:0;overflow:visible}.navbar-fixed-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}@media (min-width:768px){.navbar-nav{float:left;margin:0}}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e7e7e7}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse{border-color:#101010}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover{color:#444}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron .h1,.jumbotron h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.container:after,.container:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.row:after,.row:before{display:table;content:" "}.container:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.row:after{clear:both}.hidden{display:none}.visible-lg,.visible-md{display:none}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block}}@media (min-width:1200px){.visible-lg{display:block}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none}}@media (min-width:1200px){.hidden-lg{display:none}}
        /* Custom CSS */
        .container{
            padding-left:10px;
            padding-right:10px;
        }
        .box-result{
            border: 1px solid white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 1px 6px rgba(32, 33, 36, 0.28);
            margin-bottom:10px;
        }
        .result-title {
            margin-bottom:0;
        }
        .result-title h3{
            margin-bottom:5px;
            margin-top:0;
            font-weight:400;
        }
        a{
            color: #1a0dab;
            font-size:16px;
        }
        .result-url{
            color: #006621;
        }
        hr{
            margin-top:10px;
            margin-bottom:10px;
        }
        h3{
            font-size:18px;
        }
        .centered
        {
            display: flex;
            justify-content: center;
        }
        .con-header
        {
            margin-bottom: 10px;
        }
        #frmSearch
        {
            text-align: center;
        }
        .input-search
        {
            height: 44px;
            border-bottom-left-radius: 24px;
            border-top-left-radius: 24px;
            border-right: none;
            width: 238px;
            padding-left: 7px;
        }

        input {
            border-top: solid 1px #dfe1e5;
            border-left: solid 1px #dfe1e5;
            border-bottom: solid 1px #dfe1e5;
        }

        .border-right-radius
        {
            height: 44px;
        }
        .input-group[class*=col-] {
            float: none;
            padding-right: 0;
            padding-left: 0;
        }
        .input-group {
            position: relative;
            border-collapse: separate;
        }
        .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap;
        }
        .input-group-btn {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle;
        }
        .input-group-btn {
            display: table-cell;
        }
        .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group {
            z-index: 2;
            margin-left: -1px;
        }
        .input-group-btn>.btn {
            position: relative;
        }
        .border-right-radius
        {
            border: solid 1px #dfe1e5;
        }
        .border-right-radius {
            border-radius: 0 20px 20px 0;
            border-left: none;
            color: #4285f4;
        }
        .logo
        {
            width: 240px;
        }
        .site-footer {
            background-color: #eee;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 0;
            padding-right: 0;
            margin-top: 15px;
        }
        .npd-lr {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
</head>

<body>
<div class="home-box-search head">
    <div class="col-xs-12">
        <div class="col-md-8 con-header">
            <div class="col-md-6 centered">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('/images/logo.png') }}" class="logo">
                </a>
            </div>
            <div class="input-group search-box head col-md-6 centered ">
                <form id="frmSearch" action="{{ url('/query') }}" autocomplete="off" style="display: inherit">
                    <input type="text" class="form-control input-search" placeholder="" name="q">
                    <span class="input-group-btn">
                <button class="btn btn-default border-right-radius" type="submit" id="btnSearch"><i class="fas fa-search"></i></button>
                </span>
                </form>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="">
        <div class="">
            @if(count($results) > 0)
                @foreach($results as $k=>$result)
                    @if(!empty($result['url']))
                        @if($k === 2 || $k === 6 || $k === 9)
                            <div class="alert search-result ">
                                {{--@include('GA.google-adsense')--}}
                            </div>
                        @endif
                        <div class="box-result">
                            <div class="result-title">
                                <a target="_blank" href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}">
                                    <h3>{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}</h3>
                                </a>
                            </div>
                            <p class="result-url">{{ strpos($result['url'],'http') === false ? substr('http://'.$result['url'],0,35).'...' : substr($result['url'],0,35).'...' }}</p>
                            <hr>
                            @if(!empty($result['description']))
                                <p class="result-description">{!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['description'])) !!}</p>
                            @endif
                        </div>
                    @endif
                @endforeach
                <input type="hidden" id="isFromSERP" value="1">
            @endif

            @if(!empty($related))
                <div class="related-keywords">
                    <h3>Searches related to <b>{{ $q }}</b></h3>
                    @foreach($related as $r)
                        @if(!empty($r))
                            <div class="amp-related-kw">
                                <a href="{{ url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',$r)) }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        <div class="con-ads">
            {{--@include('GA.google-adsense')--}}
        </div>
    </div>

</div>
<div class="col-xs-12 site-footer">
    <div class="container">
        <div class="col-xs-12 con-footer npd-lr">
            <div class="col-xs-12">2018 {{ env('SITE_NAME') }}. All Rights Reserved</div>
            {{--<div class="col-xs-12 alert-link">--}}
            {{--<a href="{{ url('/contact') }}">Contact us</a> | <a href="{{ url('/term') }}">Term</a> | <a href="{{ url('/policy') }}">Policy</a> | <a href="https://www.couponsplusdeals.com" title="CouponsPlusDeals.com" target="_blank">Coupon codes</a> | <a href="https://www.couponmarathon.com/" title="CouponMarathon.com" target="_blank">CouponMarathon.com</a> | {{ config('domains.' . $GLOBALS['asset_domain'])['emailContact'] }}--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<input type="hidden" class="keyword" data-value="{{ $q }}">
</body>
</html>