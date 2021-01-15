@extends('ecommerce.master')
@section('title')
   Product - Name
@endsection

@section('custom_css')

@endsection

@section('content')

<section id="popular-product" class="ecommerce">
	<div class="container">
		<!-- Shopping items content -->
		<div class="shopping-content">

			<!-- Block heading two -->
			<div class="block-heading-two">
				<h3><span>Popular Items</span></h3>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_01.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Brown Mini Skirt</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_03.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Wool Two-Piece Suit</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
						<!-- Hot tag -->
						<span class="hot-tag bg-red">NEW</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_05.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Vintage Sunglasses</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_08.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Nulla luctus</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
						<!-- Hot tag -->
						<span class="hot-tag bg-lblue">HOT</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_02.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a title="Glory High Shoes" href="{{ url('/product') }}">Glory High Shoes</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
						<!-- Hot tag -->
						<span class="hot-tag bg-red">NEW</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="#"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_04.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a title="Vintage Stripe Jumper" href="#">Vintage Stripe Jumper</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_06.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Solid Blue Polo Shirt</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="#"><img class="img-responsive" src="{{ asset('ecommerce/img/product/shop_item_09.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a title="Nulla luctus" href="#">Nulla luctus</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
						<!-- Hot tag -->
						<span class="hot-tag bg-green">HOT</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="#"><img class="img-responsive" src="{{ asset('ecommerce/img/product/product_item_01c.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="#">Quasi Architects</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/product_item_02a.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Quasi Architects</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/product_item_01b.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Quasi Architects</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						<a href="{{ url('/product') }}"><img class="img-responsive" src="{{ asset('ecommerce/img/product/product_item_01b.jpg') }}" alt="" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{ url('/product') }}">Quasi Architects</a><span class="color pull-right">$49</span></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a class="btn btn-color btn-sm" href="#">Buy Now</a>
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a href="#">Add to cart</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Pagination -->
			<div class="shopping-pagination pull-right">
				<ul class="pagination">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<!-- Pagination end-->
		</div>
	</div>
</section>

@endsection

@push('custom_js')

<script type="text/javascript">

	/*-----------------------------------------------------------------------------------*/
	/* Product Carousel
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().owlCarousel) {
		var productCarousel = $("#product-carousel");
		productCarousel.owlCarousel({
			items:4,
			loop:true,
			autoPlay:1000,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				900: {
					items: 3
				},
				1100: {
					items: 4
				}
			}
		});

		// Custom Navigation Events
		$(".product-control-nav .next").on("click", function() {
			productCarousel.trigger('next.owl.carousel');
		});

		$(".product-control-nav .prev").on("click", function() {
			productCarousel.trigger('prev.owl.carousel');
		});
	}

	/* Main Slider */
	$('.tp-banner0').show().revolution({
		dottedOverlay: "none",
		delay: 2000, // akhane change kora lagbe time
		startWithSlide: 0,
		startwidth: 869,
		startheight: 520,
		hideThumbs: 10,
		hideTimerBar: "on",
		thumbWidth: 50,
		thumbHeight: 50,
		thumbAmount: 4,
		navigationType: "bullet",
		navigationArrows: "solo",
		navigationStyle: "round",
		touchenabled: "on",
		onHoverStop: "on",
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
		parallax: "mouse",
		parallaxBgFreeze: "on",
		parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
		keyboardNavigation: "off",
		navigationHAlign: "right",
		navigationVAlign: "bottom",
		navigationHOffset: 30,
		navigationVOffset: 30,
		soloArrowLeftHalign: "left",
		soloArrowLeftValign: "center",
		soloArrowLeftHOffset: 50,
		soloArrowLeftVOffset: 8,
		soloArrowRightHalign: "right",
		soloArrowRightValign: "center",
		soloArrowRightHOffset: 50,
		soloArrowRightVOffset: 8,
		shadow: 0,
		fullWidth: "on",
		fullScreen: "off",
		spinner: "spinner4",
		stopLoop: "on",
		stopAfterLoops: -1,
		stopAtSlide: -1,
		shuffle: "off",
		autoHeight: "off",
		forceFullWidth: "off",
		hideThumbsOnMobile: "off",
		hideNavDelayOnMobile: 1500,
		hideBulletsOnMobile: "off",
		hideArrowsOnMobile: "off",
		hideThumbsUnderResolution: 0,
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 500,
		hideAllCaptionAtLilmit: 500,
		// videoJsPath: "rs-plugin/videojs/",
		fullScreenOffsetContainer: ""
	});

</script>

@endpush('custom_js')