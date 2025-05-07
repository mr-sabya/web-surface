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
    <meta name="theme-color" content="#4302b2">
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
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body>


    <div x-data="{ loading: false, shown: false }"
        x-init="
        Livewire.hook('message.sent', () => {
            if (!shown) {
                loading = true;
                shown = true;
            }
        });
        Livewire.hook('message.processed', () => loading = false);
     ">

        <!--Start Preloader -->
        <div class="onloadpage" id="page_loader" x-show="loading">
            <div class="pre-content">
                <div class="logo-pre"><img src="{{ url('assets/frontend/images/logo.png') }}" alt="Logo" class="img-fluid" /></div>
                <!-- <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div> -->
            </div>
        </div>
        <!--End Preloader -->

    </div>


    <!--Start Header -->
    <livewire:frontend.theme.header />
    <!--End Header -->

    <!--Start sidebar -->
    <livewire:frontend.theme.sidebar />
    <!--end sidebar -->

    @yield('content')

    <!--Start Footer-->
    <livewire:frontend.theme.footer />
    <!--End Footer-->

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