@extends('layouts.app')

{{--Page--}}
    
@section('page')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb">
						<ul>
							<li><a href="index.html">Головна</a> <i class="fa fa-angle-right"></i></li>
							<li>Блог</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- breadcrumb-area end -->
    

@endsection

@section('footer')
    @include('shared.footer')
@endsection
    
    {{--Scripts--}}

@section('scripts')
@endsection