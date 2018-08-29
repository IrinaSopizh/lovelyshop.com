@extends('layouts.catalog')

@section('sidebar')
    <!-- blog-left-sidebar start -->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<!-- widget-search start -->
            @include('partials.sidebar-catalog')
        <!-- widget-tags end -->
	</div>
	<!-- blog-left-sidebar end -->
@endsection

@section('content')
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    @include('partials.toolbar')
    <div class="clear"></div>
	<div class="row">
	@include('partials.catalog-grid')	
	</div>
    @include('partials.pagination')
	</div>
@endsection




