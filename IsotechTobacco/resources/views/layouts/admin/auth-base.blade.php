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
    @yield('extra-styles')
    <link href="{{ asset('css/admin/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <header class="main-header style-2 navbar">
            @include('components.admin.header')
        </header>
        <section class="content-main mt-80 mb-80">
            @yield('main-content')
        </section>
        <footer class="main-footer text-center">
            @include('components.admin.footer')
        </footer>
    </main>
    <script src="{{ asset('js/admin/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/admin/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/admin/js/vendors/jquery.fullscreen.min.js') }}"></script>
    @yield('extra-script')

    <!-- Main Script -->
    <script src="{{ asset('js/admin/js/main.js') }}" type="text/javascript"></script>
</body>

</html>