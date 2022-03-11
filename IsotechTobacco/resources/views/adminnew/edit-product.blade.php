@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Edit Product
@endsection

@section('menu-aside')
<ul class="menu-aside">
    @include('components.admin.asidenew.dashboard')
    @include('components.admin.asidenew.setting')
    @include('components.admin.asidenew.banner')
    @include('components.admin.asidenew.product')
    @include('components.admin.asidenew.order')
    @include('components.admin.asidenew-active.addproduct')
    @include('components.admin.asidenew.transaction')
    @include('components.admin.asidenew.shipping')
</ul>
<hr>
<br>
<br>
@endsection

@section('main-section')
<div class="row">
    <div class="col-9">
        <div class="content-header">
            <h2 class="content-title">Edit Produk</h2>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card mb-4">
            <div class="card-header">
                <h4>Info Produk</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/edit-product/{{$product->id}}" enctype='multipart/form-data'>
                @csrf
                <input type="hidden" name="productID" value="{{$product->id}}">
                <div class="mb-4">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input type="text" placeholder="Type here" class="form-control" id="title" name="title" value="{{ $product->title }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Deskripsi</label>
                        <textarea id="description" name="description" placeholder="Type here" class="form-control" rows="4">{{ $product->description }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Harga Normal</label>
                                <div class="row gx-2">
                                    <input placeholder="Rp" type="text" class="form-control" id="regular_price" name="regular_price" value="{{ $product->regular_price }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Harga Promo</label>
                                <input placeholder="Rp" type="text" class="form-control" id="promo_price" name="promo_price" value="{{ $product->promo_price }}">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Stok</label>
                            <input type="text" placeholder="Type here" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
                        </div>
                        <div class="mb-4">
                            <label for="tax_rate" class="form-label">Tax rate</label>
                            <input type="text" placeholder="%" class="form-control" id="tax_rate" name="tax_rate" value="{{ $product->tax_rate }}">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="width" class="form-label">Lebar</label>
                                    <input type="text" placeholder="cm" class="form-control" id="width" name="width" value="{{ $product->width }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="height" class="form-label">Panjang</label>
                                    <input type="text" placeholder="cm" class="form-control" id="height" name="height" value="{{ $product->height }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Berat</label>
                            <input type="text" placeholder="gram" class="form-control" id="weight" name="weight" value="{{ $product->weight }}">
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">SKU</label>
                            <input type="text" placeholder="Type here" class="form-control" id="SKU" name="SKU" value="{{ $product->SKU }}">
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
                        </div> <!-- card end// -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Kategori</h4>
                            </div>
                            <div class="card-body">
                                <div class="row gx-2">
                                    <div class="col-sm-6 mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" class="form-select">
                                            @if ($product->category == "Cat A"){
                                                <option selected value="Cat A"> Cat A  </option>
                                                <option value="Cat B"> Cat B  </option>
                                                <option value="Cat C"> Cat C  </option>
                                            } 
                                            @elseif($product->category == "Cat B"){
                                                <option value="Cat A"> Cat A  </option>
                                                <option selected value="Cat B"> Cat B  </option>
                                                <option value="Cat C"> Cat C  </option>
                                            }  
                                            @else{
                                                <option value="Cat A"> Cat A  </option>
                                                <option value="Cat B"> Cat B  </option>
                                                <option selected value="Cat C"> Cat C  </option>
                                            }
                                            @endif
                                        </select>
                                    </div>
                                </div> <!-- row.// -->
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Published or Draft</h4>
                            </div>
                            <div class="card-body">
                                <div class="row gx-2">
                                    <div class="col-sm-6 mb-3">
                                        <label for="published" class="form-label">Published</label>
                                        <select name="published" class="form-select">
                                            @if ($product->published == 1){
                                                <option selected value=1> Yes </option>
                                                <option value=0> No  </option>
                                            } 
                                            @else{
                                                <option value=1> Yes </option>
                                                <option selected value=0> No  </option>
                                            }
                                            @endif
                                        </select>
                                    </div>
                                </div> <!-- row.// -->
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Filter Produk</h4>
                            </div>
                            <div class="card-body">
                                <div class="row gx-2">
                                    <div class="col-sm-6 mb-3">
                                        <label for="filter" class="form-label">Filter</label>
                                        <select name="filter" class="form-select">
                                            
                                            @if ($product->filter == 'non-filter'){
                                                <option selected value='non-filter'> non-filter </option>
                                                <option value='Terbaru'> Terbaru  </option>
                                                <option value='Populer'> Populer  </option>
                                                <option value='Featured'> Featured  </option>
                                            } 
                                            @elseif($product->filter = 'Terbaru'){
                                                <option selected value='non-filter'> non-filter </option>
                                                <option selected value='Terbaru'> Terbaru  </option>
                                                <option value='Populer'> Populer  </option>
                                                <option value='Featured'> Featured  </option>
                                            }
                                            @elseif($product->filter = 'Populer'){
                                                <option selected value='non-filter'> non-filter </option>
                                                <option value='Terbaru'> Terbaru  </option>
                                                <option selected value='Populer'> Populer  </option>
                                                <option value='Featured'> Featured  </option>
                                            }
                                            @elseif($product->filter = 'Featured'){
                                                <option value='non-filter'> non-filter </option>
                                                <option value='Terbaru'> Terbaru  </option>
                                                <option value='Populer'> Populer  </option>
                                                <option selected value='Featured'> Featured  </option>
                                            }
                                            @endif
                                        </select>
                                    </div>
                                </div> <!-- row.// -->
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