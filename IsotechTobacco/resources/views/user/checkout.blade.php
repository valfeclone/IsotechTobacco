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
            <span></span> Checkout
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
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
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="divider mt-50 mb-50"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-25">
                    <h4>Billing Details</h4>
                </div>
                <form method="post">
                    <div class="form-group">
                        <input type="text" required="" name="fname" placeholder="First name *">
                    </div>
                    <div class="form-group">
                        <input type="text" required="" name="lname" placeholder="Last name *">
                    </div>
                    <div class="form-group">
                        <input required="" type="text" name="cname" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <div class="custom_select">
                            <select class="form-control select-active">
                                <option value="">Select an option...</option>
                                <option value="AX">Aland Islands</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="billing_address" required="" placeholder="Address *">
                    </div>
                    <div class="form-group">
                        <input type="text" name="billing_address2" required="" placeholder="Address line2">
                    </div>
                    <div class="form-group">
                        <input required="" type="text" name="city" placeholder="City / Town *">
                    </div>
                    <div class="form-group">
                        <input required="" type="text" name="state" placeholder="State / County *">
                    </div>
                    <div class="form-group">
                        <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                    </div>
                    <div class="form-group">
                        <input required="" type="text" name="phone" placeholder="Phone *">
                    </div>
                    <div class="form-group">
                        <input required="" type="text" name="email" placeholder="Email address *">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                        </div>
                    </div>
                    <div id="collapsePassword" class="form-group create-account collapse in">
                        <input required="" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="ship_detail">
                        <div id="collapseAddress" class="different_address collapse in">
                            <div class="form-group">
                                <input type="text" required="" name="fname" placeholder="First name *">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="lname" placeholder="Last name *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="cname" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control select-active">
                                        <option value="">Select an option...</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="billing_address" required="" placeholder="Address *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="billing_address2" required="" placeholder="Address line2">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="city" placeholder="City / Town *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="state" placeholder="State / County *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                            </div>
                        </div>
                    </div>
                    <div class="mb-20">
                        <h5>Additional information</h5>
                    </div>
                    <div class="form-group mb-30">
                        <textarea rows="5" placeholder="Order notes"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="order_review">
                    <div class="mb-20">
                        <h4>Your Orders</h4>
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
                                <tr>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                                    <td>
                                        <h5><a href="shop-product-full.html">Yidarton Women Summer Blue</a></h5> <span class="product-qty">x 2</span>
                                    </td>
                                    <td>$180.00</td>
                                </tr>
                                <tr>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1.jpg" alt="#"></td>
                                    <td>
                                        <h5><a href="shop-product-full.html">LDB MOON Women Summe</a></h5> <span class="product-qty">x 1</span>
                                    </td>
                                    <td>$65.00</td>
                                </tr>
                                <tr>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-3-1.jpg" alt="#"></td>
                                    <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                        <h5><a href="shop-product-full.html">Women's Short Sleeve Loose</a></h5> <span class="product-qty">x 1</span>
                                    </td>
                                    <td>$35.00</td>
                                </tr>
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal" colspan="2">$280.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td colspan="2"><em>Free Shipping</em></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">$280.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                    <div class="payment_method">
                        <div class="mb-25">
                            <h5>Payment</h5>
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
                    <a href="#" class="btn btn-fill-out btn-block mt-30">Place Order</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra-script')
    <script src="{{ asset('js/user/js/shop.js') }}"></script>
@endsection