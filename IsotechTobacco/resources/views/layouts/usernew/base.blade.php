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
    @yield('extra-meta')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/user/imgs/theme/favicon.svg') }}">
    <!-- Template CSS -->
    @yield('extra-style')
    <link rel="stylesheet" href="{{ asset('css-new/user/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css-new/user/css/logout.css') }}">
</head>

<body>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">              
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/user/imgs/shop/product-16-2.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/user/imgs/shop/product-16-1.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/user/imgs/shop/product-16-3.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/user/imgs/shop/product-16-4.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/user/imgs/shop/product-16-5.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/user/imgs/shop/product-16-6.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/user/imgs/shop/product-16-7.jpg') }}" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="{{ asset('images/user/imgs/shop/thumbnail-1-grey.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('images/user/imgs/shop/thumbnail-4.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('images/user/imgs/shop/thumbnail-5.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('images/user/imgs/shop/thumbnail-6.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('images/user/imgs/shop/thumbnail-7.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('images/user/imgs/shop/thumbnail-8.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('images/user/imgs/shop/thumbnail-9.jpg') }}" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a></li>
                                    <li class="social-linkedin"><a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">$120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>
                                
                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-50">
                                    <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>        
        </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-smartphone"></i> <a href="#">(+62) - 1234 - 5678</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul class="">
                                @if ($user == null)
                                <li>
                                    <i class="fi-rs-user"></i>
                                    <a href="/login">Masuk / Daftar</a>
                                </li>
                                @else
                                <li>
                                    <i class="fi-rs-user"></i>
                                    <p>{{ $user->name }}</p>
                                </li>
                                <li>
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <button class="d-flex justify-content-center align-items-center logout" type="submit">
                                            <i class="fi-rs-sign-out"></i>
                                            <p class="logout-text">Logout</p>
                                        </button>
                                        {{-- <div class="d-flex">
                                            <i class="fi-rs-sign-out"></i>
                                            <input class="logout" type="submit" value="logout">
                                        </div> --}}
                                    </form>
                                    {{-- <i class="fi-rs-sign-out"></i>
                                    <a href="{{ url('/logout') }}">Logout</a> --}}
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/">
                            @if ($profiles == null)
                                <img src="{{ asset('images/user/imgs/logo/Logo-Gondrong.png') }}" alt="logo">
                            @else
                                <img src="/storage/profils/{{ $profiles->logo_path }}" alt="logo">
                            @endif
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="/search-product" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input id="title" name="title" list="search_terms" type="text" class="form-control" placeholder="Cari barang...">
                                    <button class="btn btn-light bg" type="submit"> <i class="material-icons md-search"></i></button>
                                </div>
                                {{-- <input id="title" name="title" type="text" placeholder="Cari barang...">
                                <input type="submit" value="Search"> --}}
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                               
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="/view-cart">
                                        <img alt="Evara" src="{{ asset('images/user/imgs/theme/icons/icon-cart.svg') }}">
                                        {{-- <span class="pro-count blue">2</span> --}}
                                    </a>
                                    {{-- <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-full.html"><img alt="Evara" src="{{ asset('images/user/imgs/shop/thumbnail-1-grey.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-full.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-full.html"><img alt="Evara" src="{{ asset('images/user/imgs/shop/thumbnail-1-grey.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-full.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/index"><img src="{{ asset('images/user/imgs/theme/logo.svg') }}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="/index">Home</a>
                                    </li>                                 
                                    <li>
                                        <a  href="/katalog" href="shop-grid-left.html">Katalog</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img alt="Evara" src="{{ asset('images/user/imgs/theme/icons/icon-heart.svg') }}">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Evara" src="{{ asset('images/user/imgs/theme/icons/icon-cart.svg') }}">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-full.html"><img alt="Evara" src="{{ asset('images/user/imgs/shop/thumbnail-1-grey.jpg') }}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-full.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-full.html"><img alt="Evara" src="{{ asset('images/user/imgs/shop/thumbnail-4.jpg') }}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-full.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index-4.html"><img src="{{ asset('images/user/imgs/theme/logo.svg') }}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a></li>
                                <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="index-4.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index-4.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop-grid-right.html">shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-full.html">Product – Right Sidebar</a></li>
                                            <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                            <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                    <li><a href="shop-cart.html">Shop – Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-full.html">Dresses</a></li>
                                            <li><a href="shop-product-full.html">Blouses & Shirts</a></li>
                                            <li><a href="shop-product-full.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="shop-product-full.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-full.html">Jackets</a></li>
                                            <li><a href="shop-product-full.html">Casual Faux Leather</a></li>
                                            <li><a href="shop-product-full.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-full.html">Gaming Laptops</a></li>
                                            <li><a href="shop-product-full.html">Ultraslim Laptops</a></li>
                                            <li><a href="shop-product-full.html">Tablets</a></li>
                                            <li><a href="shop-product-full.html">Laptop Accessories</a></li>
                                            <li><a href="shop-product-full.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog-category-fullwidth.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="blog-category-list.html">Blog Category List</a></li>
                                    <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a >About Us</a></li>
                                    <li><a >Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="page-login-register.html">login/register</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a  > Lokasi Kami </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login-register.html">Masuk / Daftar </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+62) - 1234 - 5678 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('images/user/imgs/theme/icons/icon-youtube.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        @yield('main-content')
    </main>
    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            @if ($profiles != null)
                                <div class="logo logo-width-1 wow fadeIn animated">
                                    <a href="index-4.html"><img src="/storage/profils/{{ $profiles->logo_path }}" alt="logo"></a>
                                </div>
                                <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Kontak</h5>
                                <p class="wow fadeIn animated">
                                    <strong>Alamat: </strong>{{ $profiles->alamat }}
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Nomor: </strong>{{ $profiles->kontak }}
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Jam: </strong>{{ $profiles->jam_buka }} - {{ $profiles->jam_tutup }}, {{ $profiles->hari_buka }}
                                </p>
                                <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Ikuti Kami</h5>
                                <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                    <a href="#"><img src="{{asset('images/user/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                                    <a href="https://twitter.com/{{ $profiles->twitter }}"><img src="{{asset('images/user/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                                    <a href="https://www.instagram.com/{{ $profiles->instagram }}/"><img src="{{asset('images/user/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                                </div>
                            @else
                                <div class="logo logo-width-1 wow fadeIn animated">
                                    <img src="{{ asset('images/user/imgs/logo/Logo-Gondrong.png') }}" alt="logo">
                                </div>
                                <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Kontak</h5>
                                <p class="wow fadeIn animated">
                                    <strong>Alamat: </strong>Not Available Yet
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Nomor: </strong>Not Available Yet
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Jam: </strong>Not Available Yet
                                </p>
                                <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Ikuti Kami</h5>
                                <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                    <a href="#"><img src="{{asset('images/user/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('images/user/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('images/user/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                                </div>
                            @endif
                        </div>
                    </div>
 
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">Akun Saya</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="#">Masuk</a></li>
                            <li><a href="#">Lihat Keranjang</a></li>
                            <li><a href="#">Pesanan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                        <img class="wow fadeIn animated" src="{{ asset('images/user/imgs/theme/payment-method.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">&copy; 2021, <strong class="text-brand">Tobacco</strong> - powered by Isotech </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        All rights reserved.
                    </p>
                </div>
            </div>
        </div>
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
    <script src="{{ asset('js-new/user/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js-new/user/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js-new/user/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('js-new/user/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/slick.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/wow.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/counterup.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/isotope.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('js-new/user/plugins/jquery.elevatezoom.js') }}"></script>
    @yield('extra-script')
    <!-- Template  JS -->
    <script src="{{ asset('js-new/user/main.js') }}"></script>
    <script src="{{ asset('js-new/user/shop.js') }}"></script>
</body>

</html>