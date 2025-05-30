<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/backend/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('assets/backend/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/kaiadmin.min.css') }}" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/custom.css') }}" />

    @livewireStyles
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <livewire:backend.theme.sidebar />
        <!-- End Sidebar -->

        <div class="main-panel">
            <!-- main header -->
            <livewire:backend.theme.header />
            <!-- main header -->

            <div class="container">
                @yield('content')
            </div>


        </div>

    </div>
    <!--   Core JS Files   -->
    <script data-navigate-once src="{{ asset('assets/backend/js/core/jquery-3.7.1.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/core/popper.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script data-navigate-once src="{{ asset('assets/backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script data-navigate-once src="{{ asset('assets/backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- Sweet Alert -->
    <script data-navigate-once src="{{ asset('assets/backend/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('assets/backend/js/kaiadmin.min.js') }}"></script>


    @livewireScripts

    <<!-- resources/views/layouts/app.blade.php -->
        <script>
            document.addEventListener('livewire:init', function() {
                // Show the delete confirmation modal
                Livewire.on('show-delete-modal', () => {
                    $('#deleteModal').modal('show');
                });

                // Close the delete confirmation modal
                Livewire.on('close-delete-modal', () => {
                    $('#deleteModal').modal('hide');
                });
            });
        </script>
</body>

</body>

</html>