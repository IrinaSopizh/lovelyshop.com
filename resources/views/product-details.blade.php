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
							<li><a href="shop.html">Каталог</a> <i class="fa fa-angle-right"></i></li>
							<li><a href="#">Жінки</a> <i class="fa fa-angle-right"></i></li>
							<li>Назва товару</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area end -->
    @include('partials.product-simple-area')
    @include('partials.product-tab-area')
    @include('partials.brands')
@endsection