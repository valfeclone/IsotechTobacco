@extends('layouts.user.base')

@section('meta-title')
    Gondrong Tobacco | Toko Jual Beli Tembakau
@endsection

@section('main-content')
<section class="home-slider position-relative pt-50">
    <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6">
                        <!-- MANG BENERIN MANG -->
                        <form method="POST" action="/logout">
                            @csrf
                            <input type="submit" value="Logout">
                            {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href=""><i class="fi-rs-shopping-bag-add"></i></a> --}}
                        </form> 
                        <div class="hero-slider-content-2">
                            <h4 class="animated">Trade-in offer</h4>
                            <h2 class="animated fw-900">Supper value deals</h2>
                            <h1 class="animated fw-900 text-brand">On all products</h1>
                            <p class="animated">Save more with coupons & up to 70% off</p>
                            <a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="animated slider-1-1" src="{{ asset('images/user/imgs/slider/slider-1.png') }}"alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6">
                        <div class="hero-slider-content-2">
                            <h4 class="animated">Hot promotions</h4>
                            <h2 class="animated fw-900">Fashion Trending</h2>
                            <h1 class="animated fw-900 text-7">Great Collection</h1>
                            <p class="animated">Save more with coupons & up to 20% off</p>
                            <a class="animated btn btn-brush btn-brush-2" href="shop-product-right.html"> Discover Now </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="animated slider-1-2" src="{{ asset('images/user/imgs/slider/slider-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6">
                        <div class="hero-slider-content-2">
                            <h4 class="animated">Upcoming Offer</h4>
                            <h2 class="animated fw-900">Big Deals From</h2>
                            <h1 class="animated fw-900 text-8">Manufacturer</h1>
                            <p class="animated">Clothing, Shoes, Bags, Wallets...</p>
                            <a class="animated btn btn-brush btn-brush-1" href="shop-product-right.html"> Shop Now </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="animated slider-1-3" src="{{ asset('images/user/imgs/slider/slider-3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-arrow hero-slider-1-arrow"></div>
</section>
<section class="product-tabs section-padding position-relative wow fadeIn animated">
    <div class="bg-square"></div>
    <div class="container">
        <div class="tab-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                </li> --}}
            </ul>
            {{-- <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a> --}}
        </div>
        <!--End nav-tabs-->
        <div class="tab-content wow fadeIn animated" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    @foreach($items as $product)
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="/product-detail/{{$product->id}}">
                                        <img class="default-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                        <img class="hover-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    {{-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --}}
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    {{-- <span class="hot">Hot</span> --}}
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="/product-detail/{{$product->id}}">{{ $product->category}}</a>
                                </div>
                                <h2><a href="/product-detail/{{$product->id}}">{{ $product->title}}</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>Rating%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>Rp {{ $product->regular_price}} </span>
                                    {{-- <span class="old-price">$245.8</span> --}}
                                </div>
                                <div class="product-action-1 show">
                                    <form method="POST" action="/create-cart">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value={{ $product->id }}>
                                        <input type="hidden" name="jumlahPesan" id="jumlahPesan" value={{ 1 }}>
                                        <input type="submit" value="Add to Cart">
                                        {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href=""><i class="fi-rs-shopping-bag-add"></i></a> --}}
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab one (Featured)-->
        </div>
        <!--End tab-content-->
    </div>
</section>
{{-- <section class="section-padding">
    <div class="container wow fadeIn animated">
        <h3 class="section-title mb-20"><span>Discount</span> Now</h3>
        <div class="carausel-6-columns-cover position-relative">
            <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
            <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                <div class="product-cart-wrap small hover-up">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Hot</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <h2><a href="shop-product-right.html">Lorem ipsum dolor</a></h2>
                        <div class="rating-result" title="90%">
                            <span>
                            </span>
                        </div>
                        <div class="product-price">
                            <span>$238.85 </span>
                            <span class="old-price">$245.8</span>
                        </div>
                    </div>
                </div>
                <!--End product-cart-wrap-2-->
                <div class="product-cart-wrap small hover-up">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-4-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-4-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="new">New</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <h2><a href="shop-product-right.html">Aliquam posuere</a></h2>
                        <div class="rating-result" title="90%">
                            <span>
                            </span>
                        </div>
                        <div class="product-price">
                            <span>$173.85 </span>
                            <span class="old-price">$185.8</span>
                        </div>
                    </div>
                </div>
                <!--End product-cart-wrap-2-->
                <div class="product-cart-wrap small hover-up">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-15-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-15-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="sale">Sale</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <h2><a href="shop-product-right.html">Sed dapibus orci</a></h2>
                        <div class="rating-result" title="90%">
                            <span>
                            </span>
                        </div>
                        <div class="product-price">
                            <span>$215.85 </span>
                            <span class="old-price">$235.8</span>
                        </div>
                    </div>
                </div>
                <!--End product-cart-wrap-2-->
                <div class="product-cart-wrap small hover-up">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-3-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-3-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">.33%</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <h2><a href="shop-product-right.html">Donec congue</a></h2>
                        <div class="rating-result" title="90%">
                            <span>
                            </span>
                        </div>
                        <div class="product-price">
                            <span>$83.8 </span>
                            <span class="old-price">$125.2</span>
                        </div>
                    </div>
                </div>
                <!--End product-cart-wrap-2-->
                <div class="product-cart-wrap small hover-up">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-9-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-9-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">-25%</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <h2><a href="shop-product-right.html">Curabitur porta</a></h2>
                        <div class="rating-result" title="90%">
                            <span>
                            </span>
                        </div>
                        <div class="product-price">
                            <span>$1238.85 </span>
                            <span class="old-price">$1245.8</span>
                        </div>
                    </div>
                </div>
                <!--End product-cart-wrap-2-->
                <div class="product-cart-wrap small hover-up">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-7-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-7-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="new">New</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <h2><a href="shop-product-right.html">Praesent maximus</a></h2>
                        <div class="rating-result" title="90%">
                            <span>
                            </span>
                        </div>
                        <div class="product-price">
                            <span>$123 </span>
                            <span class="old-price">$156</span>
                        </div>
                    </div>
                </div>
                <!--End product-cart-wrap-2-->
                <div class="product-cart-wrap small hover-up">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-1-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-1-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <h2><a href="shop-product-right.html">Vestibulum ante</a></h2>
                        <div class="rating-result" title="90%">
                            <span>
                            </span>
                        </div>
                        <div class="product-price">
                            <span>$238.85 </span>
                            <span class="old-price">$245.8</span>
                        </div>
                    </div>
                </div>
                <!--End product-cart-wrap-2-->
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="deals section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 deal-co">
                <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0" style="background-image: url('assets/imgs/banner/menu-banner-7.jpg');">
                    <div class="deal-top">
                        <h2 class="text-brand">Deal of the Day</h2>
                        <h5>Limited quantities.</h5>
                    </div>
                    <div class="deal-content">
                        <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden Design</a></h6>
                        <div class="product-price"><span class="new-price">$139.00</span><span class="old-price">$160.99</span></div>
                    </div>
                    <div class="deal-bottom">
                        <p>Hurry Up! Offer End In:</p>
                        <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                        <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 deal-co">
                <div class="deal wow fadeIn animated" style="background-image: url('assets/imgs/banner/menu-banner-8.jpg');">
                    <div class="deal-top">
                        <h2 class="text-brand">Men Clothing</h2>
                        <h5>Shirt & Bag</h5>
                    </div>
                    <div class="deal-content">
                        <h6 class="product-title"><a href="shop-product-right.html">Try something new on vacation</a></h6>
                        <div class="product-price"><span class="new-price">$178.00</span><span class="old-price">$256.99</span></div>
                    </div>
                    <div class="deal-bottom">
                        <p>Hurry Up! Offer End In:</p>
                        <div class="deals-countdown" data-countdown="2026/03/25 00:00:00"></div>
                        <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection

@section('extra-script')
    <script src="{{ asset('js/user/js/plugins/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('js/user/js/shop.js') }}"></script>
@endsection