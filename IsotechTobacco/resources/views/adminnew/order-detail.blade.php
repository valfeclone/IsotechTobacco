@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Order Detail
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
        <h2 class="content-title card-title">Detail Pesanan</h2>
        <p>Detail untuk ID Pesanan: {{ $items['order'][0]->id }}</p>
    </div>
</div>
<div class="card">
    <header class="card-header">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                <span>
                    <i class="material-icons md-calendar_today"></i> <b>{{  $items['order'][0]->created_at  }}</b>
                </span> <br>
                <small class="text-muted">Order ID: {{ $items['order'][0]->id }}</small>
            </div>
           
        </div>
    </header> <!-- card-header end// -->
    <div class="card-body">
        <div class="row mb-50 mt-20 order-info-wrap">
            <div class="col-md-4">
                <article class="icontext align-items-start">
                    <span class="icon icon-sm rounded-circle bg-primary-light">
                        <i class="text-primary material-icons md-person"></i>
                    </span>
                    <div class="text">
                        <h6 class="mb-1">Pelanggan</h6>
                        <p class="mb-1">
                            {{ $items['buyer'][0]->name }} <br> {{ $items['buyer'][0]->email }} <br> {{ $items['buyer'][0]->nomor_telpon }}
                        </p>
                      
                    </div>
                </article>
            </div> <!-- col// -->
            {{-- <div class="col-md-4">
                <article class="icontext align-items-start">
                    <span class="icon icon-sm rounded-circle bg-primary-light">
                        <i class="text-primary material-icons md-local_shipping"></i>
                    </span>
                    <div class="text">
                        <h6 class="mb-1">Info Pesanan</h6>
                        <p class="mb-1">
                            Shipping: Fargo express <br> Pay method: card <br> Status: new
                        </p>
                       
                    </div>
                </article>
            </div> <!-- col// --> --}}
            <div class="col-md-4">
                <article class="icontext align-items-start">
                    <span class="icon icon-sm rounded-circle bg-primary-light">
                        <i class="text-primary material-icons md-place"></i>
                    </span>
                    <div class="text">
                        <h6 class="mb-1">Dikirim ke</h6>
                        <p class="mb-1">
                            City: {{ $items['buyer'][0]->kota }} <br>{{ $items['buyer'][0]->alamat }} <br> 
                        </p>
                        
                    </div>
                </article>
            </div> <!-- col// -->
        </div> <!-- row // -->
        <div class="row">
            <div class="col-lg-7">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="40%">Produk</th>
                                <th width="20%">Harga Unit</th>
                                <th width="20%">Kuantitas</th>
                                <th width="20%" class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd($items['carts']) }} --}}
                            @foreach ($items['carts'] as $cart)
                            <tr>
                                <td>
                                    <a class="itemside" href="#">
                                        <div class="left">
                                            <img src="/storage/products/{{ $cart->product->product_image_path }}" width="40" height="40" class="img-xs" alt="Item">
                                        </div>
                                        <div class="info"> {{ $cart->product->title }}</div>
                                    </a>
                                </td>
                                <td>Rp {{ to_rupiah_norp($cart->product->regular_price) }} </td>
                                <td> {{ $cart->jumlahPesan }} </td>
                                @php
                                    $total = $cart->product->regular_price * $cart->jumlahPesan;
                                @endphp
                                <td class="text-end">Rp {{ to_rupiah_norp($total) }}  </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4">
                                    <article class="float-end">
                                        <dl class="dlist">
                                            <dt>Subtotal:</dt>
                                            @php
                                                $subtotal = $items['order'][0]->totalTagihan - $items['order'][0]->ongkir;
                                            @endphp
                                            <dd>Rp {{ to_rupiah_norp($subtotal) }}</dd>
                                        </dl>
                                        <dl class="dlist">
                                            <dt>Ongkos Kirim:</dt>
                                            <dd>Rp {{ to_rupiah_norp($items['order'][0]->ongkir) }}</dd>
                                        </dl>
                                        <dl class="dlist">
                                            <dt>Total:</dt>
                                            @php
                                                $total = $items['order'][0]->totalTagihan ;
                                            @endphp
                                            <dd> <b class="h5">Rp {{ to_rupiah_norp($total) }}</b> </dd>
                                        </dl>
                                        <dl class="dlist">
                                            <dt class="text-muted">Status:</dt>
                                            <dd>
                                                
                                                <span class="badge rounded-pill alert-success text-success">{{ $items['order'][0]->statusTransaksi }}</span>
                                            </dd>
                                        </dl>
                                    </article>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- table-responsive// -->
            </div> <!-- col// -->
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="box shadow-sm bg-light">
                    <h6 class="mb-15">Upload Bukti Pengiriman</h6>
                    {{-- <p>
                        <img src="assets/imgs/card-brands/2.png" class="border" height="20"> Master Card **** **** 4768 <br>
                        Business name: Grand Market LLC <br>
                        Phone: +1 (800) 555-154-52
                    </p> --}}
                    <form action="/admin/upload-bukti-pengiriman" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="card-body">
                            <input type="hidden" id="order_id" name="order_id" value="{{ $items['order'][0]->id }}">
                            <div class="input-upload">
                                <img src="{{ asset('images/admin/imgs/theme/upload.svg') }}" alt="">
                                <input name="bukti_pengiriman" id="bukti_pengiriman" class="form-control" type="file">
                            </div>
                            <input class="btn btn-light rounded font-sm mr-5 text-body hover-up" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="h-25 pt-4">
                    <a href="/admin/invoice/{{ $items['orderId'] }}" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Lihat Invoice</a>
                    <a href="/admin/invoice/pdf/{{ $items['orderId'] }}" class="btn btn-primary">Lihat PDF Invoice</a>
                </div>
            </div> <!-- col// -->
        </div>
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
@endsection