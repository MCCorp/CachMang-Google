@extends('app-amp')
@section('content')
    <div class="row" style="margin-left:0px;margin-right:0px">
        <div class="s-result col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="wrap-results">
                @include('custom-ads.ads-head')
                @if(count($results) > 0)
                    @foreach($results as $k=>$result)
                        <?php  $sk = $k%3; $searchklass = $sk==0?1:($sk==1?2:3); ?>
                        <?php
                        preg_match('/\$([0-9]+[\.]*[0-9]*) off|\$([0-9]+[\.]*[0-9]*) Off|\$([0-9]+[\.]*[0-9]*)/', $result['title'], $findDollar);
                        preg_match('/([0-9]+[\.]*[0-9]*)\% Off|([0-9]+[\.]*[0-9]*)\% off|([0-9]+[\.]*[0-9]*)\%/', $result['title'], $findPercent);
                        ?>
                        <div class="search-result">
                            <div class="search-content search-{{ $searchklass }}">
                                <div class="search-body">
									@if(empty($result['type']) || $result['type'] !== 'fake')
                                        <a href="{{ strpos($result['url'],'http') === false ? 'http://'.$result['url'] : $result['url'] }}" target="_blank" {!! $rel_ex !!}>
                                            <h3 class="text-primary">
                                                @if(!empty($findDollar))
                                                    <span class="btn btn-warning  pull-left discount-value">
                                                {{strtolower($findDollar[0])}}
                                            </span>
                                                @elseif(!empty($findPercent))
                                                    <span class="btn btn-warning  pull-left discount-value">
                                                {{strtolower($findPercent[0])}}
                                            </span>
                                                @else
                                                    <span class="btn btn-warning  pull-left discount-value-code">
                                                 CODE
                                            </span>
                                                @endif
                                                {!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}
                                            </h3>
                                        </a>
									@else
										<h3 class="text-primary">
                                            @if(!empty($findDollar))
                                                <span class="btn btn-warning  pull-left discount-value">
                                                {{strtolower($findDollar[0])}}
                                            </span>
                                            @elseif(!empty($findPercent))
                                                <span class="btn btn-warning  pull-left discount-value">
                                                {{strtolower($findPercent[0])}}
                                            </span>
                                            @else
                                                <span class="btn btn-warning  pull-left discount-value-code">
                                                 CODE
                                            </span>
                                            @endif
                                                {!! html_entity_decode(str_ireplace($q, '<b>'.$q.'</b>', $result['title'])) !!}
                                        </h3>
									@endif
                                    @if(!empty($result['description']))
                                        <span class="rs-description">{!! html_entity_decode($result['description']) !!}</span>
                                    @endif
                                    <p class="result-url">
                                        {{ str_limit(html_entity_decode($result['url']),60) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                <input type="hidden" id="isFromSERP" value="1">
                {{--@include('custom-ads.ads-foot')--}}
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding:10px">
            @if(!empty($related))
                <div class="pnel">
                    <h3>Searches related to <b>{{ $q }}</b></h3>
                    @foreach($related as $r)
                        @if(!empty($r))
                            <div class="rl-row">
                                <?php
                                $href = url('/') . '/' . str_ireplace(' ', '-', str_ireplace('%','',strtolower($r)));
                                if(strpos($href,'jobs') === false || strpos($href,'job') === false)
                                    $href .= '-jobs';
                                ?>
                                <a title="{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}" class="related_keywords" href="{{ $href }}">{!! html_entity_decode(str_ireplace($q, '<strong>'.$q.'</strong>', $r )) !!}</a>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <input type="hidden" class="keyword" data-value="{{ $q }}">
@endsection
