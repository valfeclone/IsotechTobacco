@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Semua Produk
@endsection

@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index-4.html" rel="nofollow">Beranda</a>
            <span></span> Katalog
        </div>
    </div>
</div>

<section class="mt-50 mb-50">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-product-fillter">
                    <div class="totall-product">
                        {{-- <p> We found <strong class="text-brand">688</strong> items for you!</p> --}}
                    </div>
                    {{-- <div class="sort-by-product-area">
                        <div class="sort-by-cover">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="fi-rs-apps-sort"></i>Urutkan:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> Harga: Rendah ke Tinggi <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">Harga: Rendah ke Tinggi</a></li>
                                    <li><a href="#">Harga: Tinggi ke Rendah</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row product-grid-3">
                    @foreach($items as $product)
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="/product-detail/{{$product->id}}">
                                        <img class="default-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                        <img class="hover-img" src="/storage/products/{{ $product->product_image_path }}" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    {{-- <span class="hot">Hot</span> --}}
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="#">{{ $product->category }}</a>
                                </div>
                                <h2><a href="/product-detail/{{$product->id}}">{{ $product->title }}</a></h2>
                                <div class="rating-result" title="90%">
                                    {{-- <span>
                                        <span>90%</span>
                                    </span> --}}
                                </div>
                                <div class="product-price">
                                    <span>{{ $product->regular_price }} </span>
                                    {{-- <span class="old-price">$245.8</span> --}}
                                </div>
                                <div class="product-action-1 show">
                                    <form method="POST" action="/create-cart">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value={{ $product->id }}>
                                        <input type="hidden" name="jumlahPesan" id="jumlahPesan" value={{ 1 }}>
                                        <input type="submit" value="Add to Cart">
                                    </form>
                                    {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Music</a>
                                </div>
                                <h2><a href="shop-product-full.html">Colorful Pattern Shirts</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>90%</span>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Music</a>
                                </div>
                                <h2><a href="shop-product-full.html">Cartoon Astronaut T-Shirts</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>50%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$138.85 </span>
                                    <span class="old-price">$255.8</span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">Best Sell</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Watch</a>
                                </div>
                                <h2><a href="shop-product-full.html">Plain Striola Shirts</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>95%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$338.85 </span>
                                    <span class="old-price">$445.8</span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Music</a>
                                </div>
                                <h2><a href="shop-product-full.html">Landscape Painting Shirt</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>70%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$123.85 </span>
                                    <span class="old-price">$235.8</span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">-30%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Speaker</a>
                                </div>
                                <h2><a href="shop-product-full.html">Letter Print T-Shirt</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>70%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$28.85 </span>
                                    <span class="old-price">$45.8</span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">-22%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Camera</a>
                                </div>
                                <h2><a href="shop-product-full.html">Element Pattern Print Shirts</a></h2>
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
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Phone</a>
                                </div>
                                <h2><a href="shop-product-full.html">Vintage Henley Shirt</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>98%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$1275.85 </span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Accessories </a>
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
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg"alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Accessories </a>
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
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Music</a>
                                </div>
                                <h2><a href="shop-product-full.html">Colorful Pattern Shirts</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>90%</span>
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
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Music</a>
                                </div>
                                <h2><a href="shop-product-full.html">Cartoon Astronaut T-Shirts</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>50%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$138.85 </span>
                                    <span class="old-price">$255.8</span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-full.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-1-grey.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">Best Sell</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Watch</a>
                                </div>
                                <h2><a href="shop-product-full.html">Plain Striola Shirts</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                        <span>95%</span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$338.85 </span>
                                    <span class="old-price">$445.8</span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    <a aria-label="Bagikan" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-3 primary-sidebar sticky-sidebar">
                <div class="widget-category mb-30">
                    <h5 class="section-title style-1 mb-30 wow fadeIn animated">Kategori</h5>
                    <form class="categories" method="POST" action="/katalog" enctype='multipart/form-data'>
                        @csrf
                        <input type="text" placeholder="Type Category here" class="form-control" id="category" name="category">
                        <input class="mt-5 btn btn-md rounded font-sm hover-up"  type="submit" value="Search">
                    </form>
                </div>   
            </div>
        </div>
    </div>
</section>
@endsection