@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Bukti Pengiriman
@endsection

@section('menu-aside')
<ul class="menu-aside">
    @include('components.admin.asidenew.dashboard')
    @include('components.admin.asidenew.setting')
    @include('components.admin.asidenew.banner')
    @include('components.admin.asidenew.product')
    @include('components.admin.asidenew-active.order')
    @include('components.admin.asidenew.addproduct')
    @include('components.admin.asidenew.shipping')
</ul>
<hr>
<br>
<br>
@endsection

@section('main-section')
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Foto Bukti Pengiriman</h2>
        <p>Detail untuk ID Pesanan: {{ $order->id }}</p>
        {{-- <p>Detail untuk ID Pesanan: 1</p> --}}
    </div>
</div>
<div class="card">
    <header class="card-header">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                <span>
                    <i class="material-icons md-calendar_today"></i> <b>{{  $order->created_at  }}</b>
                    {{-- <i class="material-icons md-calendar_today"></i> <b>1</b> --}}
                </span> <br>
                <small class="text-muted">Order ID: {{ $order->id }}</small>
                {{-- <small class="text-muted">Order ID: 1</small> --}}
            </div>
           
        </div>
    </header> <!-- card-header end// -->
    <div class="card-body">
        <img src="/storage/bukti_pengiriman/{{ $order->foto_bukti_pengiriman }}" class="img-xl" alt="Item" height="500px">
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
@endsection