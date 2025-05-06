<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Niwax - Web Design &amp; Digital Marketing Agency HTML Template</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#101010">
    <!--website-favicon-->
    <link href="images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/plugin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/font-awesome/5.11.2/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/darkmode.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body>

    <!--Start login Form-->
    <section class="login-page pad-tb">
        <div class="v-center m-auto">
            <a href="{{ route('home') }}" wire:navigate class="d-block text-center mb30">
                <img src="{{ url('assets/frontend/images/white-logo.png') }}" alt="Logo" class="mega-darks-logo">
            </a>
            @yield('content')

        </div>
    </section>
    <!--End login Form-->


    <!-- js placed at the end of the document so the pages load faster -->
    <script data-navigate-once src="{{ asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/js/plugin.min.js') }}"></script>

    <!-- <script data-navigate-once src="{{ asset('assets/frontend/js/preloader.js') }}"></script> -->
    <script src="{{ asset('assets/frontend/js/dark-mode.js') }}"></script>
    <!--common script file-->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    @livewireScripts
</body>

</html>