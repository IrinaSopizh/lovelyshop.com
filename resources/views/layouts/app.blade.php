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
						<a href="#"><img src="img/banner/1-1.jpg" alt="" /></a>
					</div>
				</div>
				<!-- single-banner end -->
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="row">
						<!-- single-banner start -->
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="single-banner banner-margin">
								<a href="#"><img src="img/banner/1-1.jpg" alt="" /></a>
							</div>							
						</div>
						<!-- single-banner end -->					
						<!-- single-banner start -->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-banner">
								<a href="#"><img src="img/banner/1-1.jpg" alt="" /></a>
							</div>							
						</div>
						<!-- single-banner end -->
						<!-- single-banner start -->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-banner">
								<a href="#"><img src="img/banner/1-1.jpg" alt="" /></a>
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
						<h1>Найкращі товари</h1>
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
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Для чоловіків</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Для жінок</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Різне</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row">
								<div class="features-curosel">
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="Порівняти-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->				
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
												</div>
											</div>
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="col-lg-3 col-md-3">
										<div class="single-product">
											<span class="sale-text">Акція</span>
											<div class="product-img">
												<a href="#">
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
													<img class="primary-image" src="img/product/BN-BAG-3-white(1)-729x1050.jpg" alt="" />
													<img class="secondary-image" src="img/product//BN-BAG-3-white(3)-729x1050.jpg" alt="" />
												</a>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">В корзину</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>							
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">БОХО-СУМКА ЛІЛУ БІЛА</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>
												<div class="price-box">
													<span class="new-price">1752.00 грн.</span>
													<span class="old-price">2190,00 грн.</span>
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
						<h1>Найпопулярніші товари</h1>
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
							<span class="sale-text">Акція</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Акція</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
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
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Акція</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
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
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Акція</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
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
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Акція</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Акція</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
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
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
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
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
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
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- single-product end -->	
					<!-- single-product start -->
					<div class="col-lg-3 col-md-3">
						<div class="single-product">
							<span class="sale-text">Акція</span>
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/bn-bag-7-pink-peach-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-BAG-7-pink(5)-729x1050.jpg" alt="" />
								</a>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" data-toggle="tooltip" title="Додати до списку бажань"><i class="fa fa-star"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="#" data-toggle="tooltip" title="Порівняти"><i class="fa fa-exchange"></i></a>
											</div>									
										</div>
										<div class="quickviewbtn">
											<a href="/product-details" data-toggle="tooltip" title="Переглянути"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>							
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">СУМКА ЕЛИС РОЗОВИЙ ПЕРСИК</a></h2>
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-box">
									<span class="new-price">1755.00 грн.</span>
									<span class="old-price">1950.00 грн.</span>
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
						<h1>Ексклюзивні подарункові набори</h1>
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
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
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
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
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
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
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
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
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
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
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
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
										<span class="old-price">2435.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
										</div>
									</div>
								</div>									
							</div>
						</div>
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/product/BN-set-access-24(1s)-729x1050.jpg" alt="" />
									<img class="secondary-image" src="img/product/BN-set-access-24(2s)-729x1050.jpg" alt="" />
								</a>						
							</div>
							<div class="product-content">
								<div class="pro-info">
									<h2 class="product-name"><a href="#">НАБІР АКСЕССУАРІВ ЛІССАБОН</a></h2>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="price-box">
										<span class="new-price">2070.00 грн.</span>
									</div>								
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-cart">
											<a href="#">В корзину</a>
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
						<h1>Останні публікації з блогу</h1>
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