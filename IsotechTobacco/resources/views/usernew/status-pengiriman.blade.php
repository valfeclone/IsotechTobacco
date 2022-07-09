@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Shopping Cart
@endsection

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('css-new/user/css/status.css') }}">
@endsection



@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index-4.html" rel="nofollow">Beranda</a>
            <span></span> Order
            <span></span> Status
        </div>
    </div>
</div>
<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            {{-- <div class="col-12"> --}}
                @foreach (array_reverse($tracks) as $track)
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="w-25">
                        <p class="text-center"> {{ $track["date_time"] }} </p>
                    </div>
                    <div class="mx-3">
                        <div class="bg-success rounded-border"></div>
                    </div>
                    <div class="w-25">
                        <p class="text-center">{{ $track["status"] }}</p>
                    </div>
                </div>
                <div class="vertical"></div>
                @endforeach
                <div class="vertical"></div>
                {{-- <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="w-25">
                        <p class="text-center">1 Mei 2022, 19:35 WIB</p>
                    </div>
                    <div class="mx-3">
                        <div class="bg-success rounded-border"></div>
                    </div>
                    <div class="w-25">
                        <p class="text-center">Pengiriman Sedang dipersiapkan</p>
                    </div>
                </div>
                <div class="vertical"></div>
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="w-25">
                        <p class="text-center">1 Mei 2022, 19:35 WIB</p>
                    </div>
                    <div class="mx-3">
                        <div class="bg-grey-circle rounded-border"></div>
                    </div>
                    <div class="w-25">
                        <p class="text-center">Pengiriman Sedang dipersiapkan</p>
                    </div>
                </div> --}}
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            {{-- </div> --}}
        </div>
    </div>
</section>
@endsection