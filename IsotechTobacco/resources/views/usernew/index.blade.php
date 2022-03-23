@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Semua Produk
@endsection

@section('main-content')
{{-- Carousel Slider --}}
<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="home-slide-cover mt-30">
            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                @foreach ($items['banner'] as $banner)
                <div class="single-hero-slider single-animation-wrap mt-30">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <img class="animated img-fluid" src="/storage/banners/{{ $banner->link_gambar }}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </div>
    </div>
</section>

<section class="bg-grey-9 section-padding">
    <div class="container pt-15 pb-25">
        {{-- Featured, Popular, or New Added --}}
        <div class="heading-tab d-flex">
            <div class="heading-tab-left wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Produk</span> Terbaru</h3>
            </div>
            {{-- <div class="heading-tab-right wow fadeIn animated">
                <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="row">
           
            <div class="col-lg-12 col-md-12">
                <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                @foreach($items['terbaru'] as $product)
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/product-detail/{{$product->id}}">
                                                <img class="default-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                                <img class="hover-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            {{-- <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            {{-- <span class="hot">Hot</span> --}}
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            {{-- <a href="/product-detail/{{$product->id}}"></a> --}}
                                        </div>
                                        <h2><a href="/product-detail/{{$product->id}}">{{ $product->title}}</a></h2>
                                        {{-- <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div> --}}
                                        <div class="product-price">
                                            {{-- <span>@toRupiah($product->regular_price)</span> --}}
                                            <span>{{ $product->regular_price }}</span>
                                            {{-- <span class="old-price">$245.8</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <form method="POST" action="/create-cart">
                                                @csrf
                                                <input type="hidden" name="product_id" id="product_id" value={{ $product->id }}>
                                                <input type="hidden" name="jumlahPesan" id="jumlahPesan" value={{ 1 }}>
                                                <input type="submit" value="Add to Cart">
                                            </form>
                                            {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End tab-pane-->
                    {{-- <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed 2</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$145.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Hugy Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$152.85 </span>
                                            <span class="old-price">$156.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-12%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$145.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Hugy Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$152.85 </span>
                                            <span class="old-price">$156.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-12%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>

<section class="bg-grey-9 section-padding">
    <div class="container pt-15 pb-25">
        {{-- Featured, Popular, or New Added --}}
        <div class="heading-tab d-flex">
            <div class="heading-tab-left wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Produk</span> Populer</h3>
            </div>
        </div>
        <div class="row">
           
            <div class="col-lg-12 col-md-12">
                <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                @foreach($items['populer'] as $product)
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/product-detail/{{$product->id}}">
                                                <img class="default-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                                <img class="hover-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            {{-- <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            {{-- <span class="hot">Hot</span> --}}
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            {{-- <a href="/product-detail/{{$product->id}}"></a> --}}
                                        </div>
                                        <h2><a href="/product-detail/{{$product->id}}">{{ $product->title}}</a></h2>
                                        {{-- <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div> --}}
                                        <div class="product-price">
                                            {{-- <span>@toRupiah($product->regular_price)</span> --}}
                                            <span>{{ $product->regular_price }}</span>
                                            {{-- <span class="old-price">$245.8</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <form method="POST" action="/create-cart">
                                                @csrf
                                                <input type="hidden" name="product_id" id="product_id" value={{ $product->id }}>
                                                <input type="hidden" name="jumlahPesan" id="jumlahPesan" value={{ 1 }}>
                                                <input type="submit" value="Add to Cart">
                                            </form>
                                            {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End tab-pane-->
                    {{-- <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed 2</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$145.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Hugy Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$152.85 </span>
                                            <span class="old-price">$156.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-12%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$145.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Hugy Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$152.85 </span>
                                            <span class="old-price">$156.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-12%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>
<section class="bg-grey-9 section-padding">
    <div class="container pt-15 pb-25">
        {{-- Featured, Popular, or New Added --}}
        <div class="heading-tab d-flex">
            <div class="heading-tab-left wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Produk</span> Featured</h3>
            </div>
            {{-- <div class="heading-tab-right wow fadeIn animated">
                <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="row">
           
            <div class="col-lg-12 col-md-12">
                <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                @foreach($items['featured'] as $product)
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/product-detail/{{$product->id}}">
                                                <img class="default-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                                <img class="hover-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            {{-- <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            {{-- <span class="hot">Hot</span> --}}
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            {{-- <a href="/product-detail/{{$product->id}}"></a> --}}
                                        </div>
                                        <h2><a href="/product-detail/{{$product->id}}">{{ $product->title}}</a></h2>
                                        {{-- <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div> --}}
                                        <div class="product-price">
                                            {{-- <span>@toRupiah($product->regular_price)</span> --}}
                                            <span>{{ $product->regular_price }}</span>
                                            {{-- <span class="old-price">$245.8</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <form method="POST" action="/create-cart">
                                                @csrf
                                                <input type="hidden" name="product_id" id="product_id" value={{ $product->id }}>
                                                <input type="hidden" name="jumlahPesan" id="jumlahPesan" value={{ 1 }}>
                                                <input type="submit" value="Add to Cart">
                                            </form>
                                            {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End tab-pane-->
                    {{-- <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed 2</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$145.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Hugy Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$152.85 </span>
                                            <span class="old-price">$156.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-12%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$145.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Hugy Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$152.85 </span>
                                            <span class="old-price">$156.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-12%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Smart Speaker</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.html">
                                                <img class="default-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                                <img class="hover-img" src="{{ asset('images/user/imgs/shop/product-2-1-grey.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.html">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container pt-25">
        <div class="row">
            <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Tentang kami</h6>
                <h1 class="font-heading mb-40">
                    Kami adalah supplier tobacco paling hebat
                </h1>
                @if($profiles != null)
                    <p>{{ $profiles->deskripsi }} </p>
                @else    
                    <p></p>
                @endif
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/user/imgs/logo/Logo-Gondrong-Land.png') }}" alt="logo">
            </div>
        </div>
    </div>
</section>
@endsection