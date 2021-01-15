<!DOCTYPE html>
<html class="no-js">
<head>
	<title>@yield('title') | {{ config('app.name') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ asset('ecommerce/img/favicon.ico') }}">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('ecommerce/css/bootstrap.min.css') }}">
	<link href="{{ asset('ecommerce/css/magnific-popup.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/skin-lblue.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/ecommerce.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ecommerce/css/revolutionslider_settings.css') }}" media="screen">
	@yield('custom_css')
	<script src="{{ asset('ecommerce/js/vendor/modernizr-2.6.2.min.js') }}"></script>
</head>
<body>
<section class="loading-overlay" style="margin-top: 200px;">
	<div class="Loading-Page">
		<h1 class="loader">Loading...</h1>
	</div>
</section>
<header>
	<div class="top-bar">
		<div class="container">

<!-- Gmail & Number -->
<div class="tb-contact pull-left">
	<i class="fa fa-envelope color"></i> &nbsp; <a href="{{ 'mailto:contact@'.Str::lower(config('app.name')).'.com' }}">{{ 'contact@'.Str::lower(config('app.name')).'.com' }}</a>
	&nbsp;&nbsp;
	<i class="fa fa-phone color"></i> &nbsp; +1 (342)-(323)-4923
</div>

<!-- Cart -->
<div class="tb-shopping-cart pull-right">
	<a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color">2</span></a>
	<div class="b-dropdown-block">
		<h4><i class="fa fa-shopping-cart color"></i> Your cart's Items</h4>
		<ul class="list-unstyled">
			<li>
				<div class="cart-img">
					<a href="#"><img src={{ asset("ecommerce/img/ecommerce/view-cart/1.png") }} alt="" class="img-responsive" /></a>
				</div>
				<div class="cart-title">
					<h5><a href="#">Premium Quality Shirt</a></h5>
					<span class="label label-color label-sm">$1,90</span>
				</div>
				<div class="clearfix"></div>
			</li>
			<li>
				<div class="cart-img">
					<a href="#"><img src={{ asset("ecommerce/img/ecommerce/view-cart/2.png") }} alt="" class="img-responsive" /></a>
				</div>
				<div class="cart-title">
					<h5><a href="#">Premium Quality Shirt</a></h5>
					<span class="label label-color label-sm">$1,20</span>
				</div>
				<div class="clearfix"></div>
			</li>
		</ul>
		<a href="{{ url('/checkout') }}" class="btn btn-white btn-sm">View Cart</a> &nbsp; 
		<a href="#" class="btn btn-color btn-sm">Procced to Checkout</a>
	</div>
</div>

<!-- Wishlist -->
<div class="tb-shopping-cart pull-right">
	<a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-heart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color">2</span></a>
	<div class="b-dropdown-block">
		<h4><i class="fa fa-heart color"></i> Your Wishlist Items</h4>
		<ul class="list-unstyled">
			<li>
				<div class="cart-img">
					<a href="#"><img src={{ asset("ecommerce/img/ecommerce/view-cart/1.png") }} alt="" class="img-responsive" /></a>
				</div>
				<div class="cart-title">
					<h5><a href="#">Premium Quality Shirt</a></h5>
					<span class="label label-color label-sm">$1,90</span>
				</div>
				<div class="clearfix"></div>
			</li>
			<li>
				<div class="cart-img">
					<a href="#"><img src={{ asset("ecommerce/img/ecommerce/view-cart/2.png") }} alt="" class="img-responsive" /></a>
				</div>
				<div class="cart-title">
					<h5><a href="#">Premium Quality Shirt</a></h5>
					<span class="label label-color label-sm">$1,20</span>
				</div>
				<div class="clearfix"></div>
			</li>
		</ul>
		<a href="{{ url('/wishlist') }}" class="btn btn-white btn-sm">View Wishlist</a> &nbsp; 
		<a href="#" class="btn btn-color btn-sm">Add to Cart</a>
	</div>
</div>

<!-- Language -->
<div class="tb-language dropdown pull-right">
	<a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-globe"></i> English <i class="fa fa-angle-down color"></i></a>
	<ul class="dropdown-menu dropdown-mini" role="menu">
		<li><a href="#">Bangla</a></li>
	</ul>
</div>

<!-- Search -->
<div class="tb-search pull-left">
	<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
	<div class="b-dropdown-block">
		<form>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Type Something">
						<span class="input-group-btn">
							<button class="btn btn-color" type="button">Search</button>
						</span>
			</div>
		</form>
	</div>
</div>

<!-- Social Media -->
<div class="tb-social pull-right">
	<div class="brand-bg text-right">

		<a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
		<a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
		<a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
	</div>
</div>

    	<div class="clearfix"></div>
	</div>
</div>

<div class="header-1">
		<div class="container">
			<div class="row">

<!-- Logo -->
<div class="col-md-4 col-sm-4">
	<div class="logo">
		<h1><a href="{{ url('/') }}"><i class="fa fa-bookmark-o"></i> {{ config('app.name') }} </a></h1>
	</div>
</div>

<!-- Search -->
<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
	<div class="header-search">
		<form>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Type Something">
						<span class="input-group-btn">
							<button class="btn btn-color" type="button">Search</button>
						</span>
			</div>
		</form>
	</div>
</div>

		</div>
	</div>

<!-- Main Links -->
<div class="navi">
	<div class="container">
		<div class="navy">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="#">Men</a>
					<ul>
						<li><a href="{{ url('/products') }}"><span>Shop</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Single product</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Cart</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Checkout</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Wishlist</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign In</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign Up</span></a></li>
						<li><a href="{{ url('/products') }}"><span>404 Page</span></a></li>
					</ul>
				</li>
				<li><a href="#">Women</a>
					<ul>
						<li><a href="{{ url('/products') }}"><span>Shop</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Single product</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Cart</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Checkout</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Wishlist</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign In</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign Up</span></a></li>
						<li><a href="{{ url('/products') }}"><span>404 Page</span></a></li>
					</ul>
				</li>
				<li><a href="#">Baby</a>
					<ul>
						<li><a href="{{ url('/products') }}"><span>Shop</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Single product</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Cart</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Checkout</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Wishlist</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign In</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign Up</span></a></li>
						<li><a href="{{ url('/products') }}"><span>404 Page</span></a></li>
					</ul>
				</li>
				<li><a href="#">Electronics</a>
					<ul>
						<li><a href="{{ url('/products') }}"><span>Shop</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Single product</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Cart</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Checkout</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Wishlist</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign In</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign Up</span></a></li>
						<li><a href="{{ url('/products') }}"><span>404 Page</span></a></li>
					</ul>
				</li>
				<li><a href="#">Groceries</a>
					<ul>
						<li><a href="{{ url('/products') }}"><span>Shop</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Single product</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Cart</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Checkout</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Wishlist</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign In</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign Up</span></a></li>
						<li><a href="{{ url('/products') }}"><span>404 Page</span></a></li>
					</ul>
				</li>
				<li><a href="#">Health & Beauty</a>
					<ul>
						<li><a href="{{ url('/products') }}"><span>Shop</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Single product</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Cart</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Checkout</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Wishlist</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign In</span></a></li>
						<li><a href="{{ url('/products') }}"><span>Sign Up</span></a></li>
						<li><a href="{{ url('/products') }}"><span>404 Page</span></a></li>
					</ul>
				</li>
				<li><a href="{{ url('/about_us') }}">About Us</a></li>
				<li><a href="{{ url('/contact_us') }}">Contact Us</a></li>
				@guest
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
				@endguest
				@auth
					@if(auth()->user()->email_verified_at !== null)
						@if(auth()->user()->role === 'Admin')
							<li><a href="{{ route('admin.home') }}">Dashboard</a></li>
						@else
							<li><a href="#">{{ auth()->user()->name }}</a>
								<ul>
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">
											<span>Logout</span>
										</a>
									</li>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									<li><a href=""><span>Profile</span></a></li>
									<li><a href="{{ url('/checkout') }}"><span>Go to your Cart</span></a></li>
									<li><a href=""><span>Order History</span></a></li>
									<li><a href=""><span>Activity Logs</span></a></li>
								</ul>
							</li>
						@endif
					@else
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
					@endif
				@endauth
			</ul>
		</div>
	</div>
</div>

	</div>
</header>

@yield('content')

<footer class="footer-area-content">
	<div class="container">
		<div class="footer-wrapper style-3">
			<div class="type-1">
				<div class="footer-columns-entry">
					<div class="row">
						<div class="col-md-3">
							<!-- <img alt="" src={{ asset("ecommerce/img/footer-logo.png") }} class="footer-logo"> -->
							<h2 style="color: white;font-variant: petite-caps;">{{ config('app.name') }}</h2>
							<div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
							<div class="footer-address">
								30 South Avenue San Francisco<br> Phone: +78 123 456 123<br> 
								Email: <a href="{{ 'mailto:contact@'.config('app.name').'.com' }}">{{ 'contact@'.config('app.name').'.com' }}</a><br>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Customer Care</h3>
							<ul class="column">

<!-- Terms & Condition Modal -->
								<li><a type="button" data-toggle="modal" data-target="#TermsAndConditionModal" href="#">Terms & Condition</a></li>
									<div class="modal fade" id="TermsAndConditionModal" tabindex="-1" role="dialog" aria-labelledby="TermsAndConditionModal" aria-hidden="true">
									<div class="modal-dialog modal-dialog-scrollable" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="TermsAndConditionModal">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ol>
												<li>Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. </li><br>
												<li>Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. </li><br>
												<li>Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. </li><br>
												<li>Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. Terms & Condition will be Here. </li>
											</ol>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
										</div>
										</div>
									</div>
									</div>

								<li><a href="{{ url('contact_us') }}">Contact Us</a></li>

<!-- Payment Method Modal -->
								<li><a type="button" data-toggle="modal" data-target="#paymentMethodModal" href="#">Payment Method</a></li>
								<div class="modal fade" id="paymentMethodModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLabel">Our Payment Methods</h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul>
												<li>Cash On Delivery</li>
												<li>Bcash</li>
												<li>Nagad</li>
											</ul>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
										</div>
										</div>
									</div>
								</div>
							</ul>
							<div class="clear"></div>

						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Your Account</h3>
							<ul class="column">
								<li><a href="#">My Orders</a></li>
								<li><a href="#">Order History</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Shop Information</h3>
							<ul class="column">
								<li><a href="{{ url('/about_us') }}">About Us</a></li>
								@guest
								<li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Become Member</a></li>
								@endguest
							</ul>
							<div class="clear"></div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-3">
							<h3 class="column-title">Our working hours</h3>
							<div class="footer-description">
								<b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
								<b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
								<b>Sunday:</b> Closed
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
</footer>
<script src="{{ asset('ecommerce/js/vendor/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('ecommerce/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('ecommerce/js/smoothscroll.js') }}"></script>
<script src="{{ asset('ecommerce/js/jquery.scrollUp.js') }}"></script>
<script src="{{ asset('ecommerce/js/menu.js') }}"></script>
<script src="{{ asset('ecommerce/js/swiper/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('ecommerce/js/swiper/swiper.custom.js') }}"></script>
<script src="{{ asset('ecommerce/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('ecommerce/js/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('ecommerce/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('ecommerce/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('ecommerce/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('ecommerce/js/main.js') }}"></script>

@stack('custom_js')

</body>
</html>