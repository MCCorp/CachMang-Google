@if($enable_ads && !empty($ads))
    @foreach($ads as $k => $v)
        @if($k<$ads_count)
        <div class="box-result search-result">
            <h3 class="title result-title">
                <a target="_blank" href="{{ $v['domain'] }}">{{ $v['title'] }}</a>
            </h3>
            <p class="result-url">
                <span class="ad">Ad</span>
                {{ $v['domain'] }}
            </p>
            <p class="result-description rs-description">{{ $v['description'] }}</p>
        </div>
        @endif
    @endforeach
@endif