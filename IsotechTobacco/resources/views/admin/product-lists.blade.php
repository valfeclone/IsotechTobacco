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
    <a href="#" class="btn btn-light rounded font-md">Export</a>
    <a href="#" class="btn btn-light rounded  font-md">Import</a>
    <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
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
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/1.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Just another product name</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/2.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Brown Winter Jacket for Men</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/3.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Jeans short new model</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/4.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Travel Bag XL</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/5.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Just another product name</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/6.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Just another product name</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/7.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Just another product name</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/8.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Apple Airpods CB-133</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/9.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Apple Airpods CB-133</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
            <div class="col">
                <div class="card card-product-grid">
                    <a href="#" class="img-wrap"> <img src="{{ asset('images/admin/imgs/items/10.jpg') }}" alt="Product"> </a>
                    <div class="info-wrap">
                        <a href="#" class="title text-truncate">Apple Airpods CB-133</a>
                        <div class="price mb-2">$179.00</div> <!-- price.// -->
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- card-product  end// -->
            </div> <!-- col.// -->
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
