<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('provider.layouts.meta')
        <title> @yield('title')</title>
    </head>

    <body class="fix-header fix-sidebar card-no-border">
        @include('provider.inc.preloader')
        <div id="main-wrapper">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        @include('provider.layouts.script')
    </body>

</html>
