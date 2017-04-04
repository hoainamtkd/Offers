@include('site.layout.head')
<div id="page">
	<div class="site-inner">
		<!-- Header TOp -->
		@include('site.layout.header')
		<div class="container banner-top">
			@include('site.layout.banner_top')
		</div>
		<div class="container">
			<div class="col-md-2 content-left">
				@include('site.layout.left')
			</div>
			<div class="col-md-10 content-center">
				@yield('content')
			</div>
		</div>
	</div>
	<!-- End Header TOp -->
</div>
</div>

<script type="text/javascript" src="{{asset('public/site/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/site/js/ui-carousel.js')}}"></script>
<script src="{{asset('public/admin/js/lib/bootstrap.js')}}"></script>
</body>
</html>