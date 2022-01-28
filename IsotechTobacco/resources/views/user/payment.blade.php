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
            <span></span> Payment
        </div>
    </div>
</div>
<div class="p-4 m-5 d-flex justify-content-center">
    <form class="border border-2 rounded bg-light p-3 w-50" action="">
        <div class="mt-1 mb-4">
            <h3>Pilih Metode Pembayaran:</h3>
        </div>
        <div class="d-flex flex-column">
            <div class="d-flex flex-row my-2">
                <img class="w-25" src="{{ asset('images/user/imgs/payment/mandiri.png') }}" alt="">
                <div class="d-flex flex-row justify-content-between align-items-center w-100 border border-2">
                    <label class="w-50 mx-5 d-flex align-items-center" for="mandiri">Logo Mandiri</label>
                    <input class="w-50 h-50 d-flex" type="radio" name="payment_method" id="mandiri" value="mandiri">
                </div>
            </div>
            <div class="d-flex flex-row my-2">
                <img class="w-25" src="{{ asset('images/user/imgs/payment/mandiri.png') }}" alt="">
                <div class="d-flex flex-row justify-content-between align-items-center w-100 border border-2">
                    <label class="w-50 mx-5 d-flex align-items-center" for="mandiri">Logo Mandiri</label>
                    <input class="w-50 h-50 d-flex" type="radio" name="payment_method" id="mandiri" value="mandiri">
                </div>
            </div>
            <div class="d-flex flex-row my-2">
                <img class="w-25" src="{{ asset('images/user/imgs/payment/mandiri.png') }}" alt="">
                <div class="d-flex flex-row justify-content-between align-items-center w-100 border border-2">
                    <label class="w-50 mx-5 d-flex align-items-center" for="mandiri">Logo Mandiri</label>
                    <input class="w-50 h-50 d-flex" type="radio" name="payment_method" id="mandiri" value="mandiri">
                </div>
            </div>
            <div class="d-flex flex-row my-2">
                <img class="w-25" src="{{ asset('images/user/imgs/payment/mandiri.png') }}" alt="">
                <div class="d-flex flex-row justify-content-between align-items-center w-100 border border-2">
                    <label class="w-50 mx-5 d-flex align-items-center" for="mandiri">Logo Mandiri</label>
                    <input class="w-50 h-50 d-flex" type="radio" name="payment_method" id="mandiri" value="mandiri">
                </div>
            </div>
            <div class="d-flex flex-row my-2">
                <img class="w-25" src="{{ asset('images/user/imgs/payment/mandiri.png') }}" alt="">
                <div class="d-flex flex-row justify-content-between align-items-center w-100 border border-2">
                    <label class="w-50 mx-5 d-flex align-items-center" for="mandiri">Logo Mandiri</label>
                    <input class="w-50 h-50 d-flex" type="radio" name="payment_method" id="mandiri" value="mandiri">
                </div>
            </div>
        </div>
        <div class="mt-5">
            <input class="btn btn-light fs-6 rounded mr-5 text-white hover-up" type="submit" value="Bayar">
        </div>
    </form>
</div>
@endsection

@section('extra-script')
    <script src="{{ asset('js/user/js/plugins/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('js/user/js/shop.js') }}"></script>
@endsection