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
            <span></span> Payment Process
        </div>
    </div>
</div>
<div class="p-4 m-5 d-flex flex-column justify-content-center align-items-center">
    <div class="d-flex flex-column justify-content-center text-center">
        <h3>Batas Akhir Pembayaran</h3>
        <p>Sabtu, 29 Januari 2020 15:59</p>
    </div>
    <div class="container w-50 m-5">
        <div class="row border border-1 py-4 rounded">
            <h4 class="col-10">MANDIRI Virtucal Account</h4>
            <img class="col-2" src="{{ asset('images/user/imgs/payment/logo-mandiri.png') }}" alt="">
        </div>
        <div class="row border border-1 py-4 rounded">
            <div class="row my-2">
                <div class="col-9">
                    <p>Nomor Virtual Account</p>
                    <h3>88822274638716</h3>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-center">
                    <img class="w-25" src="{{ asset('images/user/imgs/payment/copy.png') }}" alt="">
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <p>Total Pembayaran</p>
                    <h3>Rp69.400</h3>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-center">
                    <img class="w-25" src="{{ asset('images/user/imgs/payment/copy.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex justify-content-center">
        <button class="w-100 btn btn-fill-out btn-block hover-up" name="login">Belanja Lagi</button>
    </div>
</div>
@endsection

@section('extra-script')
    <script src="{{ asset('js/user/js/plugins/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('js/user/js/shop.js') }}"></script>
@endsection