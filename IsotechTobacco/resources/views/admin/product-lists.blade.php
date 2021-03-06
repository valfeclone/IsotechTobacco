@extends('layouts.admin.base')

@section('meta-title')
    Admin Gondrong | Product Lists
@endsection

{{-- START: Title content --}}

@section('content-title')
    Product Lists
@endsection
@section('content-description')
    This is our products lists. You can add, update, and delete!  
@endsection
@section('button-lists')
    {{-- <a href="#" class="btn btn-light rounded font-md">Export</a>
    <a href="#" class="btn btn-light rounded  font-md">Import</a> --}}
    <a href="/admin/create-product" class="btn btn-primary btn-sm rounded">Create new</a>
    <!-- MANG BENERIN MANG -->
    <form method="POST" action="/admin/logout">
        @csrf
        <input type="submit" value="Logout">
        {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href=""><i class="fi-rs-shopping-bag-add"></i></a> --}}
    </form> 
@endsection

@section('admin-aside')
<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{ asset('images/admin/imgs/theme/logo.svg') }}" class="logo" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            @include('components.admin.aside.dashboard')
            @include('components.admin.aside-active.products')
            @include('components.admin.aside.orders')
            @include('components.admin.aside.sellers')
            @include('components.admin.aside.addproduct')
            @include('components.admin.aside.transactions')
            @include('components.admin.aside.account')
            @include('components.admin.aside.reviews')
            @include('components.admin.aside.brands')
            @include('components.admin.aside.statistics')
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item">
                <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-blank.html"> <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Starter page </span>
                </a>
            </li>
        </ul>
        <br>
        <br>
    </nav>
</aside>
@endsection

{{-- END: Title content --}}

{{-- START: main section --}}

@section('main-section')
<div class="card mb-4">
    <header class="card-header">
        <div class="row gx-3">
            <div class="col-lg-4 col-md-6 me-auto">
                <input type="text" placeholder="Search..." class="form-control">
            </div>
            <div class="col-lg-2 col-6 col-md-3">
                <select class="form-select">
                    <option>All category</option>
                    <option>Electronics</option>
                    <option>Clothings</option>
                    <option>Something else</option>
                </select>
            </div>
            <div class="col-lg-2 col-6 col-md-3">
                <select class="form-select">
                    <option>Latest added</option>
                    <option>Cheap first</option>
                    <option>Most viewed</option>
                </select>
            </div>
        </div>
    </header> <!-- card-header end// -->
    <div class="card-body">
        <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">
            @foreach($items as $product)
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="/storage/products/{{ $product->product_image_path }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">{{ $product->title}}</a>
                        <div class="price mb-2">{{ $product->regular_price}}</div> <!-- price.// -->
                        <div class="price mb-2">{{ $product->category}}</div>
                        <a href="/admin/edit-product/{{$product->id}}" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="{{ route('deleteproductID', $product->id) }}" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            @endforeach
        </div> <!-- row.// -->
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
<div class="pagination-area mt-30 mb-50">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
            <li class="page-item active"><a class="page-link" href="#">01</a></li>
            <li class="page-item"><a class="page-link" href="#">02</a></li>
            <li class="page-item"><a class="page-link" href="#">03</a></li>
            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">16</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
        </ul>
    </nav>
</div>
@endsection

{{-- END: main section --}}
