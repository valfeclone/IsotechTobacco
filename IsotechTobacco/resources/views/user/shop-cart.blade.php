@extends('layouts.user.base')

@section('meta-title')
    Gondrong Tobacco | Shopping Cart
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
                <div class="table-responsive">S
                    <table class="table shopping-summery text-center clean">
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
                            <tr class="rowchart" id="1">
                                <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-2.jpg" alt="#"></td>
                                <td class="product-des product-name">
                                    <h5 class="product-name"><a href="shop-product-right.html">J.Crew Mercantile Women's Short-Sleeve</a></h5>
                                    <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                    </p>
                                </td>
                                <td class="price" data-title="Price">$<span id="price-1" class="price-detail">65</span>.00</td>
                                <td class="text-center" data-title="Stock">
                                    <div class="detail-qty border radius m-auto">
                                        <a href="#" class="qty-down" data-index="1"><i class="fi-rs-angle-small-down" ></i></a>
                                        <span id="output-1" class="qty-val">1</span>
                                        <a href="#" class="qty-up" data-index="1" data-inc="1"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </td>
                                <td class="text-right" data-title="Cart">
                                    $<span id="total-1" class="total-val">65</span>.00
                                </td>
                                <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                            </tr>
                            <tr class="rowchart" id="2">
                                <td class="image"><img src="assets/imgs/shop/product-11-2.jpg" alt="#"></td>
                                <td class="product-des">
                                    <h5 class="product-name"><a href="shop-product-right.html">Amazon Essentials Women's Tank</a></h5>
                                    <p class="font-xs">Sit at ipsum amet clita no est,<br> sed amet sadipscing et gubergren</p>
                                </td>
                                <td class="price" data-title="Price">$<span id="price-2" class="price-detail">75</span>.00</td>
                                <td class="text-center" data-title="Stock">
                                    <div class="detail-qty border radius  m-auto">
                                        <a href="#" class="qty-down" data-index="2"><i class="fi-rs-angle-small-down"></i></a>
                                        <span id="output-2" class="qty-val">2</span>
                                        <a href="#" data-index="2" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </td>
                                <td class="text-right" data-title="Cart">
                                    $<span id="total-2">150</span>.00
                                </td>
                                <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                            </tr>
                            <tr class="rowchart" id="3">
                                <td class="image"><img src="assets/imgs/shop/product-6-1.jpg" alt="#"></td>
                                <td class="product-des">
                                    <h5 class="product-name"><a href="shop-product-right.html">Amazon Brand - Daily Ritual Women's Jersey </a></h5>
                                    <p class="font-xs">Erat amet et et amet diam et et.<br> Justo amet at dolore
                                    </p>
                                </td>
                                <td class="price" data-title="Price">$<span id="price-3" class="price-detail">62</span>.00</td>
                                <td class="text-center" data-title="Stock">
                                    <div class="detail-qty border radius  m-auto">
                                        <a href="#" class="qty-down" data-index="3"><i class="fi-rs-angle-small-down"></i></a>
                                        <span id="output-3" class="qty-val">1</span>
                                        <a href="#" class="qty-up" data-index="3"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </td>
                                <td class="text-right" data-title="Cart">
                                    $<span id="total-3">62</span>.00
                                </td>
                                <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-end">
                                    <a href="#" class="text-muted"> <i class="fi-rs-cross-small"></i> Clear Cart</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart-action text-end">
                    {{-- <a class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Update Cart</a> --}}
                    <a class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                </div>
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
                                            <td class="cart_total_amount font-lg fw-900 text-brand">$<span class="font-lg fw-900 text-brand" id="cart-total">240</span>.00</td>
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