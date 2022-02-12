@extends('layouts.admin.base')

@section('meta-title')
    Admin Gondrong | Product Lists
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
            @include('components.admin.aside.products')
            @include('components.admin.aside.orders')
            @include('components.admin.aside.sellers')
            @include('components.admin.aside-active.addproduct')
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

@section('row-section')
<div class="row">
@endsection

{{-- START: Title content --}}
    <div class="col-9">
@section('content-title')
    Add New Product
@endsection
{{-- @section('content-description')
    Add new productt section!  
@endsection --}}
@section('button-lists')
    {{-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
    <button class="btn btn-md rounded font-sm hover-up">Publish</button> --}}
@endsection
    </div>

{{-- END: Title content --}}

{{-- START: main section --}}

@section('main-section')
<div class="col-lg-9">
    <div class="card mb-4">
        <div class="card-header">
            <h4>Basic</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/create-product" enctype='multipart/form-data'>
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Product title</label>
                    <input type="text" placeholder="Type here" class="form-control" id="title" name="title">
                </div>
                <div class="mb-4">
                    <label for="SKU" class="form-label">Kode Stok</label>
                    <input type="text" placeholder="Type here" class="form-control" id="SKU" name="SKU">
                </div>
                <div class="mb-4">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="text" placeholder="Type here" class="form-control" id="stock" name="stock">
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Full description</label>
                    <textarea id="description" name="description" placeholder="Type here" class="form-control" rows="4"></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="regular_price" class="form-label">Regular price</label>
                            <div class="row gx-2">
                                <input placeholder="$" type="text" class="form-control" id="regular_price" name="regular_price">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="promo_price" class="form-label">Promotional price</label>
                            <input placeholder="$" type="text" class="form-control" id="promo_price" name="promo_price">
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" class="form-select">
                            <option value="Cat A"> Cat A  </option>
                            <option value="Cat B"> Cat B  </option>
                            <option value="Cat C"> Cat C  </option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="tax_rate" class="form-label">Tax rate</label>
                    <input type="text" placeholder="%" class="form-control" id="tax_rate" name="tax_rate" value=0.0>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="width" class="form-label">Width</label>
                            <input type="text" placeholder="inch" class="form-control" id="width" name="width">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="height" class="form-label">Height</label>
                            <input type="text" placeholder="inch" class="form-control" id="height" name="height">
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="weight" class="form-label">Weight</label>
                    <input type="text" placeholder="gam" class="form-control" id="weight" name="weight">
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Media</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-upload">
                            <img src="{{ asset('images/admin/imgs/theme/upload.svg') }}" alt="">
                            <input name="product_image" id="product_image" class="form-control" type="file">
                        </div>
                    </div>
                </div>
                <input class="btn btn-light rounded font-sm mr-5 text-body hover-up" type="submit" value="Save">
                <input class="btn btn-md rounded font-sm hover-up"  type="submit" value="Publish">
            </form>
        </div>
    </div> <!-- card end// -->
</div>
</div>
@endsection

{{-- END: main section --}}
