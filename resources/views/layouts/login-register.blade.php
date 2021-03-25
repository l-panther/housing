<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.head-web')
    <body>
        <div id="login-register-page">
            <main role="main">
                @yield('main-content')
            </main>
            @include('inc.footer-lr')
        </div>
    </body>
</html>
