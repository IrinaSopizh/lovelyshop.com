@extends('layouts.app')

@section('content')
	<!-- breadcrumb-area start -->
	<div class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb">
						<ul>
							<li><a href="index.html">Головна</a> <i class="fa fa-angle-right"></i></li>
							<li>Про нас</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area end -->
	<!-- about-header-area start -->
    <div class="about-header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-header">
						<h1>Про нас</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- about-header-area end -->
	<!-- about-us-area start -->
	<div class="about-us-area">
		<div class="container">
			<div class="row">
				<!-- about-img start -->
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="about-img">
						<img src="/img/about/about.jpg" alt="" />
					</div>
				</div>
				<!-- about-img end -->
				<!-- about-text start -->
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="about-text">
						<h2>We are pure-shop</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum sit amet nibh eget interdum. Nullam ligula risus, efficitur id posuere nec, pulvinar at tellus. Morbi ut tortor nibh. Pellentesque accumsan nisl nulla, et vehicula libero iaculis eu. Cras faucibus, sem et imperdiet cursus, libero risus commodo elit, euismod tempor Donec aliquet, nibh ut imperdiet venenatis, arcu lectus bibendum velit, et gravida sapien justo a libero. Suspendisse ornare, urna id finibus vestibulum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum sit amet nibh eget interdum. Nullam ligula risus, efficitur id posuere nec, pulvinar at tellus. Morbi ut tortor nibh. Pellentesque accumsan nisl nulla.</p>
						<p>Donec aliquet, nibh ut imperdiet venenatis, arcu lectus bibendum velit, et gravida sapien justo a libero. Suspendisse ornare, urna id finibus vestibulum.</p>
					</div>
				</div>
				<!-- about-text end -->
			</div>
		</div>
	</div>
	<!-- about-us-area end -->
	<!-- about-counter-area start -->
	<div class="about-counter-area">
		<div class="container">
			<div class="row">
				<!-- single-counter start -->
				<div class="col-md-3 col-sm-3">
					<div class="single-counter">
						<i class="fa fa-users"></i>
						<h3 class="about-counter">150</h3>
						<p>Happy Clients</p>
					</div>
				</div>
				<!-- single-counter end -->
				<!-- single-counter start -->
				<div class="col-md-3 col-sm-3">
					<div class="single-counter">
						<i class="fa fa-trophy"></i>
						<h3 class="about-counter">98</h3>
						<p>Awards Won</p>
					</div>
				</div>
				<!-- single-counter end -->
				<!-- single-counter start -->
				<div class="col-md-3 col-sm-3">
					<div class="single-counter">
						<i class="fa fa-thumbs-up"></i>
						<h3 class="about-counter">9999</h3>
						<p>Projects Done</p>
					</div>
				</div>
				<!-- single-counter end -->
				<!-- single-counter start -->
				<div class="col-md-3 col-sm-3">
					<div class="single-counter">
						<i class="fa fa-coffee"></i>
						<h3 class="about-counter">66689</h3>
						<p>Cups Coffee</p>
					</div>
				</div>
				<!-- single-counter end -->
			</div>
		</div>
	</div>
	<!-- about-counter-area end -->
	@include('partials.brands')
@endsection

