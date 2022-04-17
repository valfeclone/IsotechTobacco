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
        <p>Detail untuk ID Pesanan: 3453012</p>
    </div>
</div>
<div class="card">
    <header class="card-header">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                <span>
                    <i class="material-icons md-calendar_today"></i> <b>Wed, Aug 13, 2020, 4:34PM</b>
                </span> <br>
                <small class="text-muted">Order ID: 3453012</small>
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
                            John Alexander <br> alex@example.com <br> +998 99 22123456
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
                            City: Tashkent, Uzbekistan <br>Block A, House 123, Floor 2 <br> Po Box 10000
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
                            <tr>
                                <td>
                                    <a class="itemside" href="#">
                                        <div class="left">
                                            <img src="assets/imgs/items/1.jpg" width="40" height="40" class="img-xs" alt="Item">
                                        </div>
                                        <div class="info"> T-shirt blue, XXL size </div>
                                    </a>
                                </td>
                                <td> $44.25 </td>
                                <td> 2 </td>
                                <td class="text-end"> $99.50 </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="itemside" href="#">
                                        <div class="left">
                                            <img src="assets/imgs/items/2.jpg" width="40" height="40" class="img-xs" alt="Item">
                                        </div>
                                        <div class="info"> Winter jacket for men </div>
                                    </a>
                                </td>
                                <td> $7.50 </td>
                                <td> 2 </td>
                                <td class="text-end"> $15.00 </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="itemside" href="#">
                                        <div class="left">
                                            <img src="assets/imgs/items/3.jpg" width="40" height="40" class="img-xs" alt="Item">
                                        </div>
                                        <div class="info"> Jeans wear for men </div>
                                    </a>
                                </td>
                                <td> $43.50 </td>
                                <td> 2 </td>
                                <td class="text-end"> $102.04 </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="itemside" href="#">
                                        <div class="left">
                                            <img src="assets/imgs/items/4.jpg" width="40" height="40" class="img-xs" alt="Item">
                                        </div>
                                        <div class="info"> Product name color and size </div>
                                    </a>
                                </td>
                                <td> $99.00 </td>
                                <td> 3 </td>
                                <td class="text-end"> $297.00 </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <article class="float-end">
                                        <dl class="dlist">
                                            <dt>Subtotal:</dt>
                                            <dd>$973.35</dd>
                                        </dl>
                                        <dl class="dlist">
                                            <dt>Ongkos Kirim:</dt>
                                            <dd>$10.00</dd>
                                        </dl>
                                        <dl class="dlist">
                                            <dt>Total:</dt>
                                            <dd> <b class="h5">$983.00</b> </dd>
                                        </dl>
                                        <dl class="dlist">
                                            <dt class="text-muted">Status:</dt>
                                            <dd>
                                                <span class="badge rounded-pill alert-success text-success">Sudah terbayar</span>
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
            {{-- <div class="col-lg-4">
                <div class="box shadow-sm bg-light">
                    <h6 class="mb-15">Info pembayaran</h6>
                    <p>
                        <img src="assets/imgs/card-brands/2.png" class="border" height="20"> Master Card **** **** 4768 <br>
                        Business name: Grand Market LLC <br>
                        Phone: +1 (800) 555-154-52
                    </p>
                </div>
                <div class="h-25 pt-4">
                    <div class="col-lg-12  mb-3">
                        <label class="form-label">Nomor Resi</label>
                        <input class="form-control" type="text" placeholder="Masukkan Nomor Resi">
                    </div>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div> <!-- col// --> --}}
        </div>
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
@endsection