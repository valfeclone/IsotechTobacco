<!DOCTYPE HTML>
<html lang="en">

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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/admin/imgs/theme/favicon.svg') }}">
    <!-- Template CSS -->
    @yield('extra-style')
    <link href="{{ asset('css/admin/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    @yield('admin-aside')
    <main class="main-wrap">
        @include('components.admin.header-2')
        <section class="content-main">
            @yield('row-section')
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">
                        @yield('content-title')
                    </h2>
                    <p>
                        @yield('content-description')
                    </p>
                </div>
                <div>
                    @yield('button-lists')
                </div>
            </div>
            @yield('main-section')
        </section>
        <footer class="main-footer font-xs">
            @include('components.admin.footer-2')
        </footer>
    </main>
    {{-- {{ asset('js/admin/js/vendors/jquery-3.6.0.min.js') }} --}}
    <script src="{{ asset('js/admin/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/admin/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/admin/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('js/admin/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/admin/js/vendors/jquery.fullscreen.min.js') }}"></script>
    @yield('extra-script')
    <!-- Main Script -->
    <script src="{{ asset('js/admin/js/main.js') }}" type="text/javascript"></script>
</body>

</html>