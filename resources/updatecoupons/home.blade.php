@extends('app')
@section('content')
    <div class="col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
        @include('Google.adsense')
    </div>
    <?php $_keyword = env('KEYWORD') ? '-'.env('KEYWORD'):''; ?>
    <div class="col-xs-12 npd-lr popular-kws">
        <div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @if(!empty($sitemap_keyword[0]))
                        @foreach($sitemap_keyword[0] as $k => $v)
                            <?php $sl = !stripos($v,env('KEYWORD')) ? str_slug($v) . $_keyword : str_slug($v) ?>
                            <a href='{{ url('/') . '/' . $sl }}' class='list-group-item' title='{{ $v }}'>{{ $v }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @if(!empty($sitemap_keyword[1]))
                        @foreach($sitemap_keyword[1] as $k => $v)
                            <?php $sl = !stripos($v,env('KEYWORD')) ? str_slug($v) . $_keyword : str_slug($v) ?>
                            <a href='{{ url('/') . '/' . $sl }}' class='list-group-item' title='{{ $v }}'>{{ $v }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @if(!empty($sitemap_keyword[2]))
                        @foreach($sitemap_keyword[2] as $k => $v)
                            <?php $sl = !stripos($v,env('KEYWORD')) ? str_slug($v) . $_keyword : str_slug($v) ?>
                            <a href='{{ url('/') . '/' . $sl}}' class='list-group-item' title='{{ $v }}'>{{ $v }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="list-group">
                    @if(!empty($sitemap_keyword[3]))
                        @foreach($sitemap_keyword[3] as $k => $v)
                            <?php $sl = !stripos($v,env('KEYWORD')) ? str_slug($v) . $_keyword : str_slug($v) ?>
                            <a href='{{ url('/') . '/' . $sl }}' class='list-group-item' title='{{ $v }}'>{{ $v }}</a>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12 top-trending-search">
            <div class="col-lg-3 col-md-3 col-sm-6">
                @if(!empty($trendingSearch[1]))
                    @foreach($trendingSearch[1] as $k => $v)
                        <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                        <p>
                            <span></span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                        </p>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @if(!empty($trendingSearch[2]))
                    @foreach($trendingSearch[2] as $k => $v)
                        <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                        <p>
                            <span></span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                        </p>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @if(!empty($trendingSearch[3]))
                    @foreach($trendingSearch[3] as $k => $v)
                        <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                        <p>
                            <span></span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                        </p>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                @if(!empty($trendingSearch[4]))
                    @foreach($trendingSearch[4] as $k => $v)
                        <?php $v = stripos($v,'coupon') === false ? $v . ' coupon' : $v; ?>
                        <p>
                            <span></span> <a href="{{ url('/' . str_slug($v)) }}">{{ substr(ucwords($v), 0, 30) }} {{ strlen($v) > 20 ? '...':'' }}</a>
                        </p>
                    @endforeach
                @endif
            </div>

            {{--<div class="col-xs-12 page-nav">
                <span>
                    <a href="#1" class="page">1</a>
                </span>
                <span>
                    <a href="#2" class="page">2</a>
                </span>
                <span>
                    <a href="#3" class="page">3</a>
                </span>
            </div>--}}
            <div class="col-xs-12" style="padding-bottom: 10px;padding-top: 10px">
                @include('Google.adsense')
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.input-search').keypress(function () {
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                    var defaultKw = $('#homeInputSearch').text().replace(/\s/g,'-').toLowerCase();
                    var kw = $(this).val();
                    kw = kw.replace(/\s/g,'-').toLowerCase();
                    if(kw.indexOf(defaultKw) === -1){
                        kw = kw + '-' + defaultKw;
                    }
                    location.replace(kw);
                }
            });

            $('.defaultKwHome a').click(function () {
                $('#homeInputSearch').text($(this).text());
            });

            $('.page').click(function (e) {
//                e.prevent('default');
            });
        });
    </script>
@endsection