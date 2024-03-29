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
    <link href="{{ asset('css-new/admin/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="body-id">
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            @if($profiles != null)
                <a href="index.html" class="brand-wrap">
                    <img src="/storage/profils/{{ $profiles->logo_path }}" class="logo" alt="Dashboard Admin">
                </a>
            @else
                <div class="logo logo-width-1 wow fadeIn animated">
                    <img src="{{ asset('images/user/imgs/logo/Logo-Gondrong.png') }}" alt="logo">
                </div>
            @endif
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
            </div>
        </div>
        <nav>
            @yield('menu-aside')
        </nav>
    </aside>
    <main class="main-wrap" id="main-id">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform" method="POST" action="/admin/search-product">
                    @csrf
                    <div class="input-group">
                        <input id="title" name="title" list="search_terms" type="text" class="form-control" placeholder="Search term">
                        <button class="btn btn-light bg" type="submit"> <i class="material-icons md-search"></i></button>
                    </div>
                    {{-- <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist> --}}
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        {{-- <a class="nav-link btn-icon" href="#">
                            <i class="material-icons md-notifications animation-shake"></i>
                            <span class="badge rounded-pill">3</span>
                        </a> --}}
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a> --}}
                    </li>
                    <li class="nav-item">
                        {{-- <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a> --}}
                    </li>
                    <li class="dropdown nav-item">
                        {{-- <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img src="assets/imgs/theme/flag-us.png" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-fr.png" alt="Français">Français</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-jp.png" alt="Français">日本語</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-cn.png" alt="Français">中国人</a>
                        </div> --}}
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{ asset('images/admin/imgs/people/avatar2.jpg') }}" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div>
                            <form class="dropdown-item text-danger" method="POST" action="/admin/logout">
                                @csrf
                                <input class="dropdown-item text-danger" type="submit" value="Logout">
                                {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href=""><i class="fi-rs-shopping-bag-add"></i></a> --}}
                            </form> 
                            {{-- <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="content-main">
            @yield('main-section')
        </section> <!-- content-main end// -->
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                    document.write(new Date().getFullYear())
                    </script> ©, Isotech .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="{{ asset('js-new/admin/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js-new/admin/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js-new/admin/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('js-new/admin/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js-new/admin/vendors/jquery.fullscreen.min.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('js-new/admin/main.js') }}" type="text/javascript"></script>
</body>

</html>