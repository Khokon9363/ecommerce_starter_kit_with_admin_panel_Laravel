@extends('ecommerce.master')
@section('title')
   Home
@endsection
@section('content')

<main class="main-container">

	<!-- new collection directory -->
	<section id="content-block" class="slider_area">
		<div class="container">
			<div class="content-push">
				<div class="row">

				<!-- Sidebar Links -->
					<div class="col-md-3 col-md-push-9">
						<div class="sidebar-navigation">
							<div class="title">Product Categories<i class="fa fa-angle-down"></i></div>
							<div class="list">
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Evening dresses</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Jackets and coats</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Tops and Sweatshirts</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Blouses and shirts</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Trousers and Shorts</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Evening dresses</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Jackets and coats</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Tops and Sweatshirts</span></a>
								<a class="entry" href="{{ url('/products') }}"><span><i class="fa fa-angle-right"></i>Blouses and shirts</span></a>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="col-md-9 col-md-pull-3">

						<div class="header_slider">
							<article class="boss_slider">
								<div class="tp-banner-container">
									<div class="tp-banner tp-banner0">
										<ul>

											<!-- main system  -->
											<!-- 1) Image in sliderImage folder -->
											<!-- 2) Data-transition system -->

											<!-- SLIDE  -->
											<li data-link="#" data-target="_self" data-transition="flyin" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE --><img src="{{ asset('ecommerce/img/dummy.png') }}" alt="slidebg1" data-lazyload="{{ asset('ecommerce/sliderImage/1.jpg') }}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
												<!-- LAYER NR. 1 -->
												<div class="tp-caption very_big_white randomrotate customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
												<!-- LAYER NR. 2 -->
												<div class="tp-caption very_large_white_text randomrotate customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
												<!-- LAYER NR. 3 -->
												<div class="tp-caption large_white_text randomrotate customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>
											</li>
											<li data-link="#" data-target="_self" data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE --><img src="{{ asset('ecommerce/img/dummy.png') }}" alt="slidebg1" data-lazyload="{{ asset('ecommerce/sliderImage/2.jpg') }}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
												<!-- LAYER NR. 1 -->
												<div class="tp-caption very_big_white fade customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
												<!-- LAYER NR. 2 -->
												<div class="tp-caption very_large_white_text fade customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
												<!-- LAYER NR. 3 -->
												<div class="tp-caption large_white_text fade customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>
											</li>
											<li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE --><img src="{{ asset('ecommerce/img/dummy.png') }}" alt="slidebg1" data-lazyload="{{ asset('ecommerce/sliderImage/3.jpg') }}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
												<!-- LAYER NR. 1 -->
												<div class="tp-caption large_white_text skewfromleftshort customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>
												<!-- LAYER NR. 2 -->
												<div class="tp-caption very_large_white_text skewfromleftshort customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
												<!-- LAYER NR. 3 -->
												<div class="tp-caption very_big_white skewfromleftshort customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
											</li>
										</ul>
										<div class="slideshow_control"></div>
									</div><!-- /.tp-banner -->
								</div>
							</article>
						</div><!-- /.header_slider -->


	

						<div class="clear"></div>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end new collection directory -->

<!-- Items -->

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

	<!-- Recommended items Starts -->
	<section id="recent-product">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section class="related-products">
						<div class="block-heading-two">
							<h3><span>Recommended Items</span></h3>
						</div>
						<div class="related-products-wrapper">
							<div class="related-products-carousel">
								<div class="product-control-nav">
									<a class="prev"><i class="fa fa-angle-left"></i></a>
									<a class="next"><i class="fa fa-angle-right"></i></a>
								</div>
								<div class="row product-listing">
									<div id="product-carousel" class="product-listing">

										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">1</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>
										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">2</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>
										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">3</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>
										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">4</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>
										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">5</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>
										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">6</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>
										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">7</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>
										<div class="product  item first ">
											<article>

												<figure>
													<a href="#">
														<img src="{{ asset('ecommerce/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">8</a></h4>

												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>
										</div>

									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>

</main>

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

@endpush