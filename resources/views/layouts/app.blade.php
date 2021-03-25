<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('include.head-app')
    <body>
        
        @yield('main-content')
        
    </body>
</html>
