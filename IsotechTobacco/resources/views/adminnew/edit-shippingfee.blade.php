@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Shipping
@endsection

@section('menu-aside')
<ul class="menu-aside">
    @include('components.admin.asidenew.dashboard')
    @include('components.admin.asidenew.setting')
    @include('components.admin.asidenew.banner')
    @include('components.admin.asidenew.product')
    @include('components.admin.asidenew.order')
    @include('components.admin.asidenew.addproduct')
    @include('components.admin.asidenew-active.shipping')
</ul>
<hr>
<br>
<br>
@endsection

@section('main-section')
<div class="row">
    <div class="col-9">
        <div class="content-header">
            <h2 class="content-title">Edit Biaya Pengiriman</h2>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card mb-4">
            <div class="card-header">
                <h4>Dari: Yogyakarta</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/edit-shippingfee/{{ $items->id }}" enctype='multipart/form-data'>
                @csrf
                <input type="hidden" name="shipfeeID" value="{{$items->id}}">
                <div class="mb-4">
                <div class="mb-4">
                    <label for="product_name" class="form-label">Kota Tujuan</label>
                    <input type="text" placeholder="Type here" class="form-control" id="tujuan" name="tujuan" value="{{ $items->tujuan }}">
                </div>
                <div class="mb-4">
                    <label class="form-label">Biaya Ongkir</label>
                    <input placeholder="Rp" type="text" class="form-control" id="harga" name="harga" value="{{ $items->harga }}">
                </div>
                <a href="/admin/shippingfee" class="btn btn-md rounded font-sm">Back</a>
                <input class="btn btn-light rounded font-sm mr-5 text-body hover-up" type="submit" value="Ubah">
                </form>
            </div>
        </div> <!-- card end// -->
    </div>
</div>
@endsection