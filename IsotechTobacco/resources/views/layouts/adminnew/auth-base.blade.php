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
    <link href="{{ asset('css-new/admin/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <header class="main-header style-2 navbar">
            <div class="col-brand">
                <a href="index.html" class="brand-wrap">
                    <img src="{{ asset('images/admin/imgs/theme/logo.svg') }}" class="logo" alt="Dashboard Admin">
                </a>
            </div>
            <div class="col-nav">
                <ul class="nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <i class="material-icons md-notifications animation-shake"></i>
                            <span class="badge rounded-pill">3</span>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                    </li> --}}
                    {{-- <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img src="assets/imgs/theme/flag-us.png" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-fr.png" alt="Français">Français</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-jp.png" alt="Français">日本語</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-cn.png" alt="Français">中国人</a>
                        </div>
                    </li> --}}
                    {{-- <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="assets/imgs/people/avatar2.jpg" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </header>

        <section class="content-main mt-80 mb-80">
        @yield('main-content')
        </section>

        <footer class="main-footer text-center">
            <p class="font-xs">
                <script>
                document.write(new Date().getFullYear())
                </script> ©, Isotech .
            </p>
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>
    </main>
    <script src="{{asset('js-new/admin/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{asset('js-new/admin/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('js-new/admin/vendors/jquery.fullscreen.min.js') }}"></script>
    <!-- Main Script -->
    <script src="{{asset('js-new/admin/main.js') }}" type="text/javascript"></script>
</body>

</html>
