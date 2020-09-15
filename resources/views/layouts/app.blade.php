<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MozBD') }} {{ ucfirst(config('multiauth.prefix')) }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles --> <!-- Scripts -->
    <link href="{{ asset('front/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('front/images/favicon.png') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/fontawesome/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/lightpick.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/tipso.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/main.css') }}" rel="stylesheet">

</head>
{{-- @include('inc2.preloader') --}}
@include('inc2.header')


<body class="sl-home">

    <div id="app">

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

<!-- FOOTER END -->

    <!-- Scripts -->
<script src="{{ asset('front/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/jquery-library.js') }}"></script>
<script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/appear.js') }}"></script>
<script src="{{ asset('front/js/vendor/countTo.js') }}"></script>
<script src="{{ asset('front/js/vendor/gmap3.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/select2.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/readmore.js') }}"></script>
<script src="{{ asset('front/js/vendor/jquery-ui.js') }}"></script>
<script src="{{ asset('front/js/vendor/lightpick.js') }}"></script>
<script src="{{ asset('front/js/vendor/tipso.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('front/js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/jquery.ui.touch-punch.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>

</html>
