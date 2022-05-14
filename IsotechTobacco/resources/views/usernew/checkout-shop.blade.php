@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Shopping Cart
@endsection

@section('main-content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index-4.html" rel="nofollow">Beranda</a>
                <span></span> Produk
                <span></span> Checkout
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6 mb-sm-15">
                    <div class="toggle_info">
                        <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                    </div>
                    <div class="panel-collapse collapse login_form" id="loginform">
                        <div class="panel-body">
                            <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Username Or Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                            <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-md" name="login">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-6">
                    <div class="toggle_info">
                        <span><i class="fi-rs-label mr-10"></i><span class="text-muted">Have a coupon?</span> <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                    </div>
                    <div class="panel-collapse collapse coupon_form " id="coupon">
                        <div class="panel-body">
                            <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Coupon Code...">
                                </div>
                                <div class="form-group">
                                    <button class="btn  btn-md" name="login">Apply Coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="divider mt-50 mb-50"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-25">
                        <h4>Alamat Pengiriman</h4>
                    </div>
                    <form method="post" action="/updateaddress">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="alamat" required="" placeholder="Alamat" value="{{ $items['user']->alamat }}">
                        </div>
                        
                        {{-- <div class="form-group">
                            <input required="" type="text" name="state" placeholder="State / County *">
                        </div> --}}
                        {{-- <div class="form-group">
                            <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                        </div> --}}
                        <div class="form-group">
                            <input required="" type="text" name="nomor_telpon" placeholder="Phone *" value="{{ $items['user']->nomor_telpon }}">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="custom_select">
                                    <select id="kota" name="kota" class="form-control select-active">
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->tujuan }}" {{ $items['user']->kota ==  $city->tujuan ? 'selected' : ''}}>{{ $city->tujuan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Simpan Alamat</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <h4>Pesanan Anda</h4>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="/checkout" id="formCart" method="POST">
                                        @csrf
                                        @php
                                            $i = 1
                                        @endphp
                                        @foreach ($items['cart'] as $item)
                                        <input type="hidden" name="cart_id-{{ $item->id }}" id="cart_id-{{ $item->id }}" value={{ $item->id }}>
                                        <input type="hidden" name="product_id-{{ $i }}" id="product_id-{{ $i }}" value={{ $item->product->id }}>
                                        <tr id={{ $item->product->id }}>
                                            <td class="image product-thumbnail"><img src="/storage/products/{{ $item->product->product_image_path }}" alt="#"></td>
                                            <td>
                                                <input type="hidden" name="qtyId-{{ $i }}" id="qtyId-{{ $i }}" value={{ $item->jumlahPesan }}>
                                                <h5><a href="shop-product-full.html">{{ $item->product->title }}</a></h5> <span class="product-qty">x {{ $item->jumlahPesan }}</span>
                                            </td>
                                            <td>Rp {{ $item->product->regular_price }}</td>
                                        </tr>
                                        @php
                                            $i = $i + 1;
                                        @endphp 
                                        @endforeach
                                    </form>
                                    {{-- <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1-grey.jpg" alt="#"></td>
                                        <td>
                                            <h5><a href="shop-product-full.html">LDB MOON Women Summe</a></h5> <span class="product-qty">x 1</span>
                                        </td>
                                        <td>$65.00</td>
                                    </tr>
                                    <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1-grey.jpg" alt="#"></td>
                                        <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                            <h5><a href="shop-product-full.html">Women's Short Sleeve Loose</a></h5> <span class="product-qty">x 1</span>
                                        </td>
                                        <td>$35.00</td>
                                    </tr> --}}
                                    <form method="POST" action="/checkout">
                                        @csrf
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal" colspan="2"> Rp
                                            @php
                                            $total = $items['ongkir'];
                                            foreach ($items['cart'] as $cart) 
                                                $total += $cart->jumlahPesan * $cart->product->regular_price
                                        @endphp
                                        {{ $total }}
                                        <input type="hidden" name="totalTagihan" id="totalTagihan" value="{{ $total }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Ongkos Kirim</th>
                                        <td colspan="2"><em>Rp {{ $items['ongkir'] }}</em></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900"> Rp
                                        @php
                                            $totalCart = $items['ongkir'];
                                            foreach ($items['cart'] as $cart) 
                                                $totalCart += $cart->jumlahPesan * $cart->product->regular_price
                                        @endphp
                                        {{ $totalCart }}  
                                        </span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        <div class="form-group">
                            <input type="text" id="catatan" name="catatan" placeholder="Catatan untuk tobacco">
                        </div>
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Lanjut Pembayaran</button>
                        </form>
                        {{-- <div class="payment_method">
                            <div class="mb-25">
                                <h5>Pembayaran</h5>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                                    <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                                    <div class="form-group collapse in" id="bankTranfer">
                                        <p class="text-muted mt-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                                    </div>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                                    <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Check Payment</label>
                                    <div class="form-group collapse in" id="checkPayment">
                                        <p class="text-muted mt-5">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode. </p>
                                    </div>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>
                                    <div class="form-group collapse in" id="paypal">
                                        <p class="text-muted mt-5">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-fill-out btn-block mt-30">Pesan</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection