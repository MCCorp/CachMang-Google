<div class="home-box-search head text-center">
<div class="container">
        <div class="row search-box" style="width: 100%;margin:0;margin-top: 5px;">
			<div class="col-md-3 col-sm-5 col-lg-2" style="padding:0">
				<div class="col-md-2 col-sm-5 col-lg-3">
				<a href="{{ url('/') }}">
						<img src="{{ asset('/images/logo/'. DOMAIN_HOST . '.png') }}" class="logos" alt="logo find coupon" style="width:160px;max-height: 45px"/>
				</a>
				</div>
				{{--<a class="logo" href="/">{{ $_SERVER['HTTP_HOST'] }}</a>--}}
			</div>
			@if(ENABLE_SEARCH_BOX)
            <div class="col-md-9 col-sm-7 col-lg-10">
			  <div id="form" method="get" class="">
				<form name="f" id="frmSearch" autocomplete="off" style="display: inherit" action="{{ url('/query') }}" method="get">
				<div class="input-group">
						<input id="q" name="q" autocomplete="off" class="form-control" style="border:1px solid #cdc">
						<div class="input-group-btn">
							<button class="btn btn-danger"" type="submit" style="padding: 9px 12px">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>

				</div>
				</form>
			  </div>
            </div>
			@endif
        </div>
</div>
</div>