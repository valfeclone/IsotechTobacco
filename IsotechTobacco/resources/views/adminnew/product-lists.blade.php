@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Product Lists
@endsection

@section('menu-aside')
<ul class="menu-aside">
    @include('components.admin.asidenew.dashboard')
    @include('components.admin.asidenew.setting')
    @include('components.admin.asidenew.banner')
    @include('components.admin.asidenew-active.product')
    @include('components.admin.asidenew.order')
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
        <h2 class="content-title card-title">Daftar Produk</h2>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div>
        <a href="/admin/create-product" class="btn btn-primary btn-sm rounded">Tambah</a>
    </div>
</div>
<div class="card mb-4">
    <header class="card-header">
        <div class="row align-items-center">
            <div class="col col-check flex-grow-0">
                <div class="form-check ms-2">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
            </div>
            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                <select class="form-select">
                    <option selected>Semua Kategori</option>
                    <option>Kategori A</option>
                    <option>Kategori B</option>
                    <option>Kategori C</option>
                </select>
            </div>
            {{-- <div class="col-md-2 col-6">
                <input type="date" value="02.05.2021" class="form-control">
            </div> --}}
            {{-- <div class="col-md-2 col-6">
                <select class="form-select">
                    <option selected>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Show all</option>
                </select>
            </div> --}}
        </div>
    </header> <!-- card-header end// -->
    <div class="card-body">
        @foreach ($items as $product)
        <article class="itemlist">
            <div class="row align-items-center">
                <div class="col col-check flex-grow-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-8 flex-grow-1 col-name">
                    <a class="itemside" href="#">
                        <div class="left">
                            <img src="/storage/products/{{ $product->product_image_path }}" class="img-sm img-thumbnail" alt="Item">
                        </div>
                        <div class="info">
                            <h6 class="mb-0">{{ $product->title}}</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2 col-4 col-price"> Rp <span>{{ to_rupiah_norp($product->regular_price)}}</span> </div>
                <div class="col-lg-2 col-sm-2 col-4 col-status">
                    @if ($product->published)
                        <span class="badge rounded-pill alert-success">Publish</span>    
                    @else
                        <span class="badge rounded-pill alert-danger">Draft</span> 
                    @endif
                </div>
                <div class="col-lg-2 col-sm-2 col-4 col-status">
                    <span class="badge rounded-pill alert-warning">{{ $product->filter }}</span>
                </div>
                {{-- <div class="col-lg-1 col-sm-2 col-4 col-date">
                    <span>02.11.2021</span>
                </div> --}}
                <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                    <a href="/admin/edit-product/{{$product->id}}" class="btn btn-sm font-sm rounded btn-brand">
                        <i class="material-icons md-edit"></i> Ubah
                    </a>
                    <a href="{{ route('deleteproductID', $product->id) }}" class="btn btn-sm font-sm btn-light rounded">
                        <i class="material-icons md-delete_forever"></i> Hapus
                    </a>
                </div>
            </div> <!-- row .// -->
        </article> <!-- itemlist  .// -->
        @endforeach
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
@endsection