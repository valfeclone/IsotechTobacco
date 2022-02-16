@extends('layouts.user.base')

@section('meta-title')
    Gondrong Tobacco | Shopping Cart
@endsection

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow">Home</a>
            <span></span> Shop
            <span></span> Your Cart
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table shopping-summery text-center clean">
                        <form action="">
                            <input type="hidden" name="usr_id" id="usr_id" value="1">
                        </form>
                        <thead>
                            <tr class="main-heading">
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/update-cart" id="formCart" method="POST">
                                @csrf
                            @php
                                $i = 1
                            @endphp               
                            @foreach ($carts as $cart)
                            <input type="hidden" name="cart_id-{{ $cart->id }}" id="cart_id-{{ $cart->id }}" value={{ $cart->id }}>
                            <input type="hidden" name="product_id-{{ $i }}" id="product_id-{{ $i }}" value={{ $cart->product->id }}>
                            <tr class="rowchart" id={{ $cart->product->id }}>
                                <td class="image product-thumbnail"><img src="/storage/products/{{ $cart->product->product_image_path }}" alt="#"></td>
                                <td class="product-des product-name">
                                    <h5 class="product-name"><a href="shop-product-right.html">{{ $cart->product->title }}</a></h5>
                                    <p class="font-xs">
                                    </p>
                                </td>
                                <td class="price" data-title="Price">Rp<span id="price-{{ $cart->product->id }}" class="price-detail">{{ $cart->product->regular_price }}</span></td>
                                <td class="text-center" data-title="Stock">
                                    <div class="detail-qty border radius m-auto">
                                        {{-- {{ csrf_field() }}  --}}
                                        <a href="#" class="qty-down" data-index={{ $cart->product->id }} ><i class="fi-rs-angle-small-down" ></i></a>
                                        <input type="hidden" name="qtyId-{{ $i }}" id="qtyId-{{ $i }}" value={{ $cart->jumlahPesan }}>
                                        <span id="output-{{ $cart->product->id }}" class="qty-val">{{ $cart->jumlahPesan }}</span>
                                        <a href="#" class="qty-up" data-index={{ $cart->product->id }} data-inc={{ $cart->product->id }}><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </td>
                                <td class="text-right" data-title="Cart">
                                    Rp<span id="total-{{ $cart->product->id }}" class="total-val">{{ $cart->jumlahPesan * $cart->product->regular_price }}</span>
                                </td>
                                <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                            </tr>
                            @php
                                $i = $i + 1;
                            @endphp 
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="cart-action text-end">
                    <button type="submit" form="formCart" class="btn mr-10 mb-sm-15">
                        <a><i class="fi-rs-shuffle mr-10"></i>Update Cart</a>
                    </button>
                    {{-- <a class="btn mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Update Cart</a> --}}
                    <a class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                </div>
                </form>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12">
                        <div class="border p-md-4 p-30 border-radius cart-totals">
                            <div class="heading_s1 mb-3">
                                <h4>Cart Totals</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart_total_label">Cart Subtotal</td>
                                            <td class="cart_total_amount font-lg fw-900 text-brand">Rp
                                            <span class="font-lg fw-900 text-brand" id="cart-total-1">
                                                @php
                                                    $total = 0;
                                                    foreach ($carts as $cart) 
                                                        $total += $cart->jumlahPesan * $cart->product->regular_price
                                                @endphp
                                                {{ $total }}
                                            </span></td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="cart_total_label">Shipping</td>
                                            <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                        </tr> --}}
                                        {{-- <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">$240.00</span></strong></td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                            <a href="#" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra-script')
    <script src="{{ asset('js/user/js/shop.js') }}"></script>
    {{-- <script>
        function addQuantity(id){
            $('.detail-qty').each(function () {
            console.log("test");
            var qtyval = parseInt($(this).attr(id).find('.qty-val').text(), 10);
            console.log(qtyval);
            $('.qty-up').on('click', function (event) {
                event.preventDefault();
                // qtyval = qtyval + 1;
                qtyval++;
                $(this).prev().text(qtyval);
            });
            });
        }

        function subQuantity(id){
            $('.detail-qty').each(function () {
            console.log("test");
            var qtyval = parseInt($(this).find('.qty-val').text(), 10);
            $('.qty-down').on('click', function (event) {
                event.preventDefault();
                // qtyval = qtyval - 1;
                qtyval--;
                if (qtyval > 1) {
                    $(this).next().text(qtyval);
                } else {
                    qtyval = 1;
                    $(this).next().text(qtyval);
                }
            });
            });
        }

        
    </script> --}}
@endsection