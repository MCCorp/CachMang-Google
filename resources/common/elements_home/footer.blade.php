<div class="footer list-group">

    <div class="col-xs-12 col-md-12 list-group-item">
        <div class="col-xs-12">{{ date('Y') }} {{ $_SERVER['HTTP_HOST'] }}. All Rights Reserved</div>
        {{--<div class="col-xs-12 alert-link">--}}
        <a href="{{ url('/contact') }}">Contact us</a> | <a href="{{ url('/term') }}">Term</a> | <a href="{{ url('/policy') }}">Policy</a> | <a href="http://{{ $_SERVER['HTTP_HOST'] }}/" title="{{ $_SERVER['HTTP_HOST'] }}" target="_blank">{{ $_SERVER['HTTP_HOST'] }}</a> | contact{{ '@'.$_SERVER['HTTP_HOST'] }}
        {{--</div>--}}
    </div>
</div>