@include('site.layout.head')
<div id="page">
	<div class="site-inner">
		<!-- Header TOp -->
		@include('site.layout.header')
		@include('site.layout.menu')
		<div class="container content-height">
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

<div class="container-fluid padding_left_0 padding_right_0 footer-bottom">
	<div class="container">
		<div class="copyright">
			<a class="_blank" href="" target="_blank"> © 2016 - Ecommerce software by Wordpress™ </a>
		</div>
		<div id="social_block" class="follow-us pull-right">
			<ul class="list-unstyled">
				<li class="facebook">
					<a target="_blank" title="facebook" href=""><i class="fa fa-facebook"></i></a>
				</li>
				<li class="twitter">
					<a target="_blank" title="twitter" href=""><i class="fa fa-twitter"></i></a>
				</li>
				<li class="rss">
					<a target="_blank" title="rss" href=""><i class="fa fa-rss"></i></a>
				</li>                                                                                                            <li class="instagram"><a target="_blank" title="instagram" href=""><i class="fa fa-instagram"></i></a></li>                                    <li class="linkedin"><a target="_blank" title="linkedin" href=""><i class="fa fa-linkedin"></i></a></li>                                    <li class="pintrest"><a target="_blank" title="pintrest" href=""><i class="fa fa-pinterest"></i></a></li>                                                                                 
			</ul>
		</div>
	</div>
</div>
<script src="{{asset('public/site/js/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('public/site/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/site/js/ui-carousel.js')}}"></script>
<script src="{{asset('public/admin/js/lib/bootstrap.js')}}"></script>
<script src="{{asset('public/site/js/responsive.js')}}"></script>
</body>
</html>