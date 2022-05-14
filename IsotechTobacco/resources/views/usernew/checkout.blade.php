@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Checkout
@endsection

@section('main-content')
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
        </div>
        <div class="row">
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
                                @foreach ($items['cart'] as $cart)
                                <tr>
                                    <td class="image product-thumbnail"><img src="/storage/products/{{ $cart->product->product_image_path }}" alt="#"></td>
                                    <td>
                                        <h5>{{ $cart->product->title }}</h5> <span class="product-qty">x {{ $cart->jumlahPesan }}</span>
                                    </td>
                                    <td>Rp<span>{{ $cart->product->regular_price }}</span></td>
                                </tr>
                                @endforeach                       
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal" colspan="2">{{ $items['order']->totalTagihan }}</td>
                                </tr>
                                <tr>
                                    <th>Ongkos Kirim</th>
                                    <td colspan="2"><em>Gratis Ongkir</em></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">Rp280.000</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                    <div class="payment_method">
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
                    <a href="#" class="btn btn-fill-out btn-block mt-30">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection