
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>MozDirectory</title>

    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('meta')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/purple.css') }}" rel="stylesheet">

    <!-- chartist CSS -->
    {{-- <link href="{{ asset('assets/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist-init.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/css-chart/css-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    --}}

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <!-- ============================================================== -->
        <!-- End footer -->

    </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}" defer></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}" defer></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}" defer></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}" defer></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}" defer></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}" defer></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}" defer></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    @yield('scripts')    
    <!-- ============================================================== -->
    
    <!-- chartist chart -->
    {{-- <script src="{{ asset('assets/plugins/chartist-js/dist/chartist.min.js') }}" defer></script>
    <script src="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}" defer></script> --}}
    <!-- Vector map JavaScript -->
    {{-- <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}" defer></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}" defer></script>
    <script src="{{ asset('js/dashboard3.js') }}" defer></script> --}}
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}" defer></script>

    {{-- <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}" defer></script> --}}

    

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script> --}}


    <!-- icheck -->
    {{-- <script src="{{ asset('assets/plugins/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/icheck/icheck.init.js') }}"></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>  --}}


    {{-- <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script> --}}

</body>

</html>
