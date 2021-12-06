<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @yield('meta-title')
    </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/user/imgs/theme/favicon.svg') }}">
    <!-- Template CSS -->
    @yield('extra-style')
    <link rel="stylesheet" href="{{ asset('css/user/assets/css/main.css') }}">
</head>

<body>
    <!-- Header sections -->
    <header class="header-area header-style-5">
        @include('components.user.header')
    </header>

    <!-- Mobile header sections -->
    @include('components.user.mobile-header')

    <main class="main">
        @yield('main-content')
    </main>

    <!-- Footer sections -->
    <footer class="main">
        @include('components.user.footer')
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset('js/user/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/user/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/user/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('js/user/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('js/user/js/plugins/jquery.theia.sticky.js') }}"></script>
    @yield('extra-script')
    <!-- Template  JS -->
    <script src="{{ asset('js/user/js/main.js') }}"></script>
</body>

</html>