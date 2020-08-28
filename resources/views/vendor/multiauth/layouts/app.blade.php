
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('vendor.multiauth.layouts.meta')
        <title> @yield('title')</title>
    </head>

    <body class="fix-header fix-sidebar card-no-border">
        @include('vendor.multiauth.admin.inc.preloader')
        <div id="main-wrapper">
            @include('vendor.multiauth.admin.inc.navbar')
            @include('vendor.multiauth.admin.inc.sidebar')
            <main class="py-4">
                @yield('content')
            </main>
            <footer class="footer"> © 2020 Mozambique Business Directory </footer>
        </div>
        @include('vendor.multiauth.layouts.script')
    </body>
</html>
