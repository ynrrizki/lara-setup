<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edupay | @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon.png') }}" />
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('./assets/img/favicon/favicon.ico') }}" /> --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('./assets/img/favicon') }}/apple-touch-icon.png"> --}}
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('./assets/img/favicon') }}/favicon-32x32.png"> --}}
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('./assets/img/favicon') }}/favicon-16x16.png"> --}}
    <link rel="manifest" href="{{ asset('./assets/img/favicon') }}/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('./assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('./assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('./assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('./assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('./assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('./assets/vendor/libs/toastr/toastr.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/spinkit@2.0.1/spinkit.min.css">
    <style>
        :root {
            --bs-body-bg: #F6FFF6 !important;
            --sk-color: grey;
        }

        .bg-footer-theme {
            background-color: var(--bs-body-bg) !important;
        }

        .bg-menu-theme .menu-inner>.menu-item.active>.menu-link {
            color: #129E4B;
            background-color: var(--bs-body-bg) !important;
        }

        .btn-primary {
            background-color: #137a61;
            border-color: #137a61;
            box-shadow: 0 0.125rem 0.25rem 0 rgba(246, 255, 246, 0.4);
        }

        .btn-primary:hover {
            background-color: #00e3bc;
            border-color: #00e3bc;
        }

        .skeleton,
        .skeleton-rounded {
            position: relative;
        }

        .skeleton::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            background: linear-gradient(90deg, #dadada, #e9e9e9, #e0e0e0);
            background-size: 200%;
            animation: skeleton 1s infinite reverse;
        }

        .skeleton-rounded::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            background: linear-gradient(90deg, #dadada, #e9e9e9, #e0e0e0);
            background-size: 200%;
            animation: skeleton 1s infinite reverse;
            border-radius: 100%;
        }

        @keyframes skeleton {
            0% {
                background-position: -100% 0;
            }

            100% {
                background-position: 100% 0;
            }
        }
    </style>
    @stack('css')

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('./assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('./assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar @if (auth()->user()->role == 'ADMIN') layout-without-menu @endif">
        {{-- <div class="layout-wrapper layout-content-navbar layout-without-menu"> --}}
        <div class="layout-container">
            <!-- Menu -->

            @include('partials.menu')

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('partials.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->
                    <!-- Footer -->
                    @include('partials.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    @stack('show-modal')
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('./assets/vendor/libs/jquery/jquery.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
        integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('./assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('./assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="{{ asset('./assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('./assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('./assets/js/ui-toasts.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/assets/js/ui-toasts.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('load', function() {
            AOS.init({
                once: true,
            })
        })
    </script>
    @if (session()->has('notif-success'))
        <script>
            Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            }).fire({
                icon: 'success',
                title: "{{ session('notif-success') }}",
            })
        </script>
    @endif
    @if (session()->has('notif-error'))
        <script>
            Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            }).fire({
                icon: 'error',
                title: "{{ session('notif-error') }}",
            })
        </script>
    @endif
    @stack('js')
</body>

</html>
