<!DOCTYPE html>
<!-- Stored in resources/views/layouts/app.blade.php -->
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script type="text/javascript">
        var _token = '{!! csrf_token() !!}';
        var _url = '{!! url("/") !!}';
        var _appTimeZone = '{!! config('app.timezone', 'UTC') !!}';
    </script>

    <meta name="description" content="">
    <meta name="author" content="">
    <title>{!! config('app.name', 'Lovelyshop') !!} - @yield('title')</title>
    @yield('meta')

	{{--Styles--}}
	@section('styles')
		@include('partials.styles')
	@show

	{{--Head--}}
    @section('head')
    @endsection
</head>

<body class="@yield('body_class')">
@section('navigation')
    @include('shared.navigation')
@show

	@section('content')
	<!-- HOME SLIDER -->
	@include('partials.slider')
	<!-- END HOME SLIDER -->
	<!-- banner-area start -->
	<div class="banner-area">
		<div class="container">
			<div class="row">
				<!-- single-banner start -->
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div class="single-banner">
						<a href="#"><img src="img/banner/1.jpg" alt="" /></a>
					</div>
				</div>
				<!-- single-banner end -->
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="row">
						<!-- single-banner start -->
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="single-banner banner-margin">
								<a href="#"><img src="img/banner/2.jpg" alt="" /></a>
							</div>							
						</div>
						<!-- single-banner end -->					
						<!-- single-banner start -->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-banner">
								<a href="#"><img src="img/banner/3.jpg" alt="" /></a>
							</div>							
						</div>
						<!-- single-banner end -->
						<!-- single-banner start -->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-banner">
								<a href="#"><img src="img/banner/4.jpg" alt="" /></a>
							</div>							
						</div>
						<!-- single-banner end -->
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- banner-area end -->
	<!-- features-area start -->
	<div class="features-area pad-60">
		<div class="container">
			<!-- section-heading start -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h1>FEATURED PRODUCTS</h1>
						<div class="title-icon">
							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
						</div>
					</div>
				</div>
			</div>
			<!-- section-heading end -->
			<div class="row">
				<div class="col-md-12">
					<div class="features-tab">
					  <!-- Nav tabs -->
					  <ul class="product-nav" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Men</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">women</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Clothes</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row">
								<div class="features-curosel">
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/17.jpg" alt="" />
													<img class="secondary-image" src="img/product/18.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£90.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->				
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/1.jpg" alt="" />
													<img class="secondary-image" src="img/product/2.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Vestibulum suscipit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£50.00</span>
													<span class="old-price">£80.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/3.jpg" alt="" />
													<img class="secondary-image" src="img/product/4.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Vestibulum dictum magna</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£150.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/5.jpg" alt="" />
													<img class="secondary-image" src="img/product/6.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/7.jpg" alt="" />
													<img class="secondary-image" src="img/product/8.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Sport Adidas shoes</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£100.00</span>
													<span class="old-price">£130.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/6.jpg" alt="" />
													<img class="secondary-image" src="img/product/13.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Sport Adidas shoes</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£130.00</span>
													<span class="old-price">£150.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->			
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							<div class="row">
								<div class="features-curosel">
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/2.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/1.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£100.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/7.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/2.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£100.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/8.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/3.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Light house shoes</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£90.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/4.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/7.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Kaoreet lobortis</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£60.00</span>
													<span class="old-price">£100.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/6.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/9.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£130.00</span>
													<span class="old-price">£180.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/4.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/7.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£150.00</span>
													<span class="old-price">£180.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/3.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/1.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Donec sodales</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£150.00</span>
													<span class="old-price">£180.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->			
								</div>
							</div>	
						</div>
						<div role="tabpanel" class="tab-pane" id="messages">
							<div class="row">
								<div class="features-curosel">
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/15.jpg" alt="" />
													<img class="secondary-image" src="img/product/16.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Curabitur vulputate urna</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/1.jpg" alt="" />
													<img class="secondary-image" src="img/product/2.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Vestibulum suscipit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£50.00</span>
													<span class="old-price">£80.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/9.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/7.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Light house shoes</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£90.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/5.jpg" alt="" />
													<img class="secondary-image" src="img/product/6.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/8.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/6.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Donec sodales mauris in</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£150.00</span>
													<span class="old-price">£180.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Sale</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/4.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/7.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Kaoreet lobortis</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£60.00</span>
													<span class="old-price">£100.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/women/6.jpg" alt="" />
													<img class="secondary-image" src="img/product/women/9.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">£130.00</span>
													<span class="old-price">£180.00</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->					
								</div>
							</div>	
						</div>
					  </div>
					</div>				
				</div>
			</div>
		</div>
	</div>
	<!-- features-area end -->
	<!-- new-product-area start -->
	<div class="new-product-area pad-60">
		<div class="container">
			<!-- section-heading start -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h1>Most Popular product</h1>
						<div class="title-icon">
							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
						</div>						
					</div>
				</div>
			</div>
			<!-- section-heading end -->
			<div class="row">
				<div class="features-curosel">
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/15.jpg" alt="" />
									<img class="secondary-image" src="img/product/16.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Curabitur vulputate urna</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£90.00</span>
									<span class="old-price">£120.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/1.jpg" alt="" />
									<img class="secondary-image" src="img/product/2.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Vestibulum suscipit</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£50.00</span>
									<span class="old-price">£80.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/9.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/7.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Light house shoes</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£90.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/5.jpg" alt="" />
									<img class="secondary-image" src="img/product/6.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£90.00</span>
									<span class="old-price">£120.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/8.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/6.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Donec sodales mauris in</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£150.00</span>
									<span class="old-price">£180.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/4.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/7.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Kaoreet lobortis</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£60.00</span>
									<span class="old-price">£100.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/6.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/9.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£130.00</span>
									<span class="old-price">£180.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/5.jpg" alt="" />
									<img class="secondary-image" src="img/product/6.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£90.00</span>
									<span class="old-price">£120.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/7.jpg" alt="" />
									<img class="secondary-image" src="img/product/8.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Sport Adidas shoes</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£100.00</span>
									<span class="old-price">£130.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/2.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/1.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£100.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/7.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/2.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£100.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/8.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/3.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Light house shoes</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£90.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/4.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/7.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Kaoreet lobortis</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">£60.00</span>
									<span class="old-price">£100.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->						
				</div>				
			</div>
		</div>
	</div>
	<!-- new-product-area end -->
	<!-- banner-2-area start -->
	<div class="banner-2-area pad-60">
		<div class="container">
			<div class="row">
				<!-- single-banner start -->
				<div class="col-md-4 col-sm-4">
					<div class="single-banner">
						<a href="#"><img src="img/banner/5.jpg" alt="" /></a>
					</div>
				</div>
				<!-- single-banner end -->
				<!-- single-banner start -->
				<div class="col-md-4 col-sm-4">
					<div class="single-banner">
						<a href="#"><img src="img/banner/7.jpg" alt="" /></a>
					</div>
				</div>
				<!-- single-banner end -->
				<!-- single-banner start -->
				<div class="col-md-4 col-sm-4">
					<div class="single-banner">
						<a href="#"><img src="img/banner/6.jpg" alt="" /></a>
					</div>
				</div>
				<!-- single-banner end -->
			</div>
		</div>
	</div>
	<!-- banner-2-area end -->
	<!-- top-sells-area start -->
	<div class="top-sells-area pad-60">
		<div class="container">
			<!-- section-heading start -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h1>Exclusive collection</h1>
						<div class="title-icon">
							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
						</div>						
					</div>
				</div>
			</div>
			<!-- section-heading end -->		
			<div class="row">
				<div class="top-sells-curosel">
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product first-sells">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/15.jpg" alt="" />
									<img class="secondary-image" src="img/product/16.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Curabitur vulputate</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£90.00</span>
										<span class="old-price">£120.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/1.jpg" alt="" />
									<img class="secondary-image" src="img/product/2.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£100.00</span>
										<span class="old-price">£150.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product first-sells">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/8.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/1.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Aliquam lobortis est</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£70.00</span>
										<span class="old-price">£100.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/6.jpg" alt="" />
									<img class="secondary-image" src="img/product/7.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£50.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product first-sells">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/3.jpg" alt="" />
									<img class="secondary-image" src="img/product/5.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Nulla sed libero</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£60.00</span>
										<span class="old-price">£90.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/10.jpg" alt="" />
									<img class="secondary-image" src="img/product/11.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Curabitur vulputate urna</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£50.00</span>
										<span class="old-price">£80.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product first-sells">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/3.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/4.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Nulla sed libero</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£120.00</span>
										<span class="old-price">£140.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/2.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/9.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£150.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product first-sells">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/7.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/5.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Sed libero Nulla</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£100.00</span>
										<span class="old-price">£130.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/women/4.jpg" alt="" />
									<img class="secondary-image" src="img/product/women/3.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Posuere Condimentum</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£110.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product first-sells">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/3.jpg" alt="" />
									<img class="secondary-image" src="img/product/4.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Nulla sed libero</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£130.00</span>
										<span class="old-price">£150.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/15.jpg" alt="" />
									<img class="secondary-image" src="img/product/6.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">£150.00</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">Add to cart</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
					</div>
					<!-- single-product end -->
				</div>
			</div>
		</div>
	</div>
	<!-- top-sells-area end -->
	<!-- latest-blog-area start -->
	<div class="latest-blog-area pad-60">
		<div class="container">
			<!-- section-heading start -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h1>LATEST FROM BLOG</h1>
						<div class="title-icon">
							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
						</div>						
					</div>
				</div>
			</div>
			<!-- section-heading end -->		
			<div class="row">
				<div class="latest-blog-curosel">
					<!-- single-latest-blog start -->
					<div class="col-lg-12">
						<div class="single-latest-blog">
							<div class="latest-blog-img">
								<a href="#"><img src="img/blog/blog1.jpg" alt="" /></a>
							</div>
							<div class="latest-blog-content">
								<h3><a href="#">Nam liber tempor cum soluta</a></h3>
								<div class="meta">
									<span class="post-category">in <a href="#">Uncategorized</a></span>
									<span class="meta-border">|</span>
									<span class="time"><i class="fa fa-clock-o"></i> feb 15, 2016</span>
								</div>
								<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. ... </p>
							</div>
						</div>
					</div>
					<!-- single-latest-blog end -->
					<!-- single-latest-blog start -->
					<div class="col-lg-12">
						<div class="single-latest-blog">
							<div class="latest-blog-img">
								<a href="#"><img src="img/blog/blog2.jpg" alt="" /></a>
							</div>
							<div class="latest-blog-content">
								<h3><a href="#">Nam liber tempor cum soluta</a></h3>
								<div class="meta">
									<span class="post-category">in <a href="#">Uncategorized</a></span>
									<span class="meta-border">|</span>
									<span class="time"><i class="fa fa-clock-o"></i> feb 15, 2016</span>
								</div>
								<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. ... </p>
							</div>
						</div>
					</div>
					<!-- single-latest-blog end -->
					<!-- single-latest-blog start -->
					<div class="col-lg-12">
						<div class="single-latest-blog">
							<div class="latest-blog-img">
								<a href="#"><img src="img/blog/blog3.jpg" alt="" /></a>
							</div>
							<div class="latest-blog-content">
								<h3><a href="#">Nam liber tempor cum soluta</a></h3>
								<div class="meta">
									<span class="post-category">in <a href="#">Uncategorized</a></span>
									<span class="meta-border">|</span>
									<span class="time"><i class="fa fa-clock-o"></i> feb 15, 2016</span>
								</div>
								<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. ... </p>
							</div>
						</div>
					</div>
					<!-- single-latest-blog end -->
					<!-- single-latest-blog start -->
					<div class="col-lg-12">
						<div class="single-latest-blog">
							<div class="latest-blog-img">
								<a href="#"><img src="img/blog/blog2.jpg" alt="" /></a>
							</div>
							<div class="latest-blog-content">
								<h3><a href="#">Nam liber tempor cum soluta</a></h3>
								<div class="meta">
									<span class="post-category">in <a href="#">Uncategorized</a></span>
									<span class="meta-border">|</span>
									<span class="time"><i class="fa fa-clock-o"></i> jan 15, 2016</span>
								</div>
								<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. ... </p>
							</div>
						</div>
					</div>
					<!-- single-latest-blog end -->
					<!-- single-latest-blog start -->
					<div class="col-lg-12">
						<div class="single-latest-blog">
							<div class="latest-blog-img">
								<a href="#"><img src="img/blog/blog1.jpg" alt="" /></a>
							</div>
							<div class="latest-blog-content">
								<h3><a href="#">Nam liber tempor cum soluta</a></h3>
								<div class="meta">
									<span class="post-category">in <a href="#">Uncategorized</a></span>
									<span class="meta-border">|</span>
									<span class="time"><i class="fa fa-clock-o"></i> jan 15, 2016</span>
								</div>
								<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. ... </p>
							</div>
						</div>
					</div>
					<!-- single-latest-blog end -->
				</div>
			</div>
		</div>
	</div>
	<!-- latest-blog-area end -->
	
	@include('partials.brands')
@show
    
@section('footer')
    @include('shared.footer')
@show
       
@section('scripts')
    @include('shared.scripts')
@show

    </body>
</html>