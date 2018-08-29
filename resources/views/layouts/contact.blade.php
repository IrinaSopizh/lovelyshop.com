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

        @include('partials.map')
        
        <div class="contact-area">
		    <div class="container">
			    <div class="row">
                    @yield('content')
                </div>
	        </div>
        </div>

        @section('footer')
            @include('shared.footer')
         @show
       
        @section('scripts')
            @include('shared.scripts')
        @show

    </body>
</html>