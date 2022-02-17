@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Detail Product
@endsection

@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index-4.html" rel="nofollow">Beranda</a>
            <span></span> Produk
            <span></span> {{ $items->title}}
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-detail accordion-detail">
                    <div class="row mb-50">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="/storage/products/{{ $items->product_image_path }}" alt="product image">
                                    </figure>
                                    {{-- <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1-grey.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1-grey.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1-grey.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1-grey.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1-grey.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1-grey.jpg" alt="product image">
                                    </figure> --}}
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="/storage/products/{{ $items->product_image_path }}" alt="product image"></div>
                                    {{-- <div><img src="assets/imgs/shop/thumbnail-1-grey.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-1-grey.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-1-grey.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-1-grey.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-1-grey.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-1-grey.jpg" alt="product image"></div> --}}
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h2 class="title-detail">{{ $items->title}}</h2>
                           
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins>Rp. <span class="text-brand">{{ $items->regular_price}}</span></ins>
                                        {{-- <ins><span class="old-price font-md ml-15">Rp200.000</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p>{{ $items->description}}</p>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <form method="POST" action="/create-cart">
                                        @php
                                            $i = 1;
                                            $count = 1;
                                        @endphp
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value={{ $items->id }}>
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down-p-detail" data-index={{ $i }}><i class="fi-rs-angle-small-down"></i></a>
                                            <input type="hidden" name="jumlahPesan" id="qtyId-{{ $i }}" value={{ $count }}>
                                            <span id="output-{{ $i }}" class="qty-val">{{ $count }}</span>
                                            <a href="#" class="qty-up-p-detail" data-index={{ $i }}><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                                {{-- <input type="hidden" name="jumlahPesan" id="jumlahPesan" value={{ 1 }}>
                                                <input type="submit" value="Add to Cart"> --}}
                                                {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href=""><i class="fi-rs-shopping-bag-add"></i></a> --}}
                                            <button type="submit" class="button button-add-to-cart">Tambahkan ke keranjang</button>
                                            <a aria-label="Compare" class="action-btn hover-up"><i class="fi-rs-share"></i></a>
                                        </div>
                                    </form> 
                                </div>
                                <ul class="product-meta font-xs color-grey mt-50">
                                    <li class="mb-5">SKU: <a href="#">{{ $items->SKU}}</a></li>
                                    <li>Ketersediaan stok:<span class="in-stock text-success ml-5">{{ $items->stock}} barang</span></li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 m-auto entry-main-content">
                            <h2 class="section-title style-1 mb-30">Deskripsi</h2>
                            <div class="description mb-50">
                                <p>
                                    {{ $items->description}}
                                </p>
                                {{-- <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped
                                    besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
                                </p> --}}
                            
                                <hr class="wp-block-separator is-style-dots">
                                {{-- <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward
                                    energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p> --}}
                            
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra-script')
<script src="{{ asset('js-new/user/shop-p-detail.js') }}"></script>

@endsection