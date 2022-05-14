@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Shopping Cart
@endsection

@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index-4.html" rel="nofollow">Beranda</a>
            <span></span> Produk
            <span></span> Keranjang Anda
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive container">
                    <div class="row">
                        <div class="col-10">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Subtotal</th>
                                        {{-- <th scope="col">Hapus</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="/update-cart" id="formCart" method="POST">
                                        @csrf
                                    @php
                                        $i = 1
                                    @endphp
                                    @foreach ($items['carts'] as $cart)
                                    <input type="hidden" name="cart_id-{{ $cart->id }}" id="cart_id-{{ $cart->id }}" value={{ $cart->id }}>
                                    
                                    <input type="hidden" name="product_id-{{ $i }}" id="product_id-{{ $i }}" value={{ $cart->product->id }}>
                                    <tr class="rowchart" style="height: 7rem;" id={{ $cart->product->id }}>
                                        <td class="image product-thumbnail"><img src="/storage/products/{{ $cart->product->product_image_path }}" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="product-detail/{{ $cart->product->id }}">{{ $cart->product->title }}</a></h5>
                                            {{-- <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                            </p> --}}
                                        </td>
                                        <td class="price" data-title="Price">Rp<span id="price-{{ $i }}">{{ $cart->product->regular_price }}</span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <a href="#" class="qty-down" data-index={{ $i }}><i class="fi-rs-angle-small-down"></i></a>
                                                <input type="hidden" name="qtyId-{{ $i }}" id="qtyId-{{ $i }}" value={{ $cart->jumlahPesan }}>
                                                <span id="output-{{ $i }}" class="qty-val">{{ $cart->jumlahPesan }}</span>
                                                <a href="#" class="qty-up" data-index={{ $i }}><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            Rp<span id="total-{{ $i }}" class="total-val">{{ $cart->jumlahPesan * $cart->product->regular_price }} </span>
                                        </td>
                                        {{-- <td class="action" data-title="Remove">
                                            <form action="/delete-cart" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $cart->id }}">
                                                <button class="bg-transparent border-white" type="submit">
                                                    <a href="#" class="text-muted">
                                                        <i class="fi-rs-trash"></i>
                                                    </a>
                                                </button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                    @php
                                        $i = $i + 1;
                                    @endphp 
                                    @endforeach
                                </form>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-2">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items['carts'] as $cart)
                                    <tr class="rowchart" id={{ $cart->product->id }}>
                                        <td class="" style="height: 7rem;" data-title="Remove">
                                        <form action="/delete-cart" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $cart->id }}">
                                            <button class="bg-transparent border-white" type="submit">
                                                <a href="#" class="text-muted">
                                                    <i class="fi-rs-trash"></i>
                                                </a>
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cart-action text-end">
                    <button type="submit" form="formCart" class="btn mr-10 mb-sm-15">
                        <a><i class="fi-rs-shuffle mr-10"></i>Update Keranjang</a>
                    </button>
                    <a class="btn " href="/"><i class="fi-rs-shopping-bag mr-10"></i>Lanjut Belanja</a>
                </div>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12">
                        {{-- <form action="/checkout" method="POST">
                            @csrf --}}
                        <div class="border p-md-4 p-30 border-radius cart-totals">
                            <div class="heading_s1 mb-3">
                                <h4>Total Keranjang</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart_total_label">Subtotal Keranjang</td>
                                            <td class="cart_total_amount">
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-lg fw-900 text-brand" id="sub-cart-total-1">
                                                    @php
                                                    $total = 0;
                                                    foreach ($items['carts'] as $cart) 
                                                        $total += $cart->jumlahPesan * $cart->product->regular_price
                                                @endphp
                                                {{ $total }}
                                                </span>
                                                {{-- <input type="hidden" name="totalTagihan" id="totalTagihan" value="{{ $total }}"> --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Ongkos Kirim</td>
                                            <td class="cart_total_amount">
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-lg fw-900 text-brand" id="ongkos-kirim">
                                                    {{ $items['ongkir'] }}
                                                </span>
                                                {{-- <input type="hidden" name="totalTagihan" id="totalTagihan" value="{{ $total }}"> --}}
                                            </td>
                                            {{-- <td class="cart_total_label">Ongkos Kirim</td>
                                            <td class="cart_total_amount" id="ongkos-kirim">20000</td> --}}
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount"><strong>
                                                <span class="font-lg fw-900 text-brand">Rp</span>
                                                <span class="font-xl fw-900 text-brand" id="cart-total-1">
                                                @php
                                                    $totalCart = $items['ongkir'];
                                                    foreach ($items['carts'] as $cart) 
                                                        $totalCart += $cart->jumlahPesan * $cart->product->regular_price
                                                @endphp
                                                {{ $totalCart }}    
                                            </span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <button id="btn-checkout" class="btn" type="submit"> 
                                {{-- <a href="/checkout"> --}}
                                    <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut
                                
                                {{-- </a> --}}
                            </button>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection