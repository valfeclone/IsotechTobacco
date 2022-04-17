@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Order Lists
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
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Daftar Biaya Ongkir</h2>
        {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
    </div>
    <div>
        <a href="/admin/add-shippingfee" class="btn btn-primary"><i class="material-icons md-plus"></i>Tambah Biaya Ongkir</a>
    </div>
</div>
<div class="card mb-4">
    <header class="card-header">
        <div class="row gx-3">
            <div class="col-lg-4 col-md-6 me-auto">
                <input type="text" placeholder="Cari..." class="form-control">
            </div>
            {{-- <div class="col-lg-2 col-6 col-md-3">
                <select class="form-select">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Show all</option>
                </select>
            </div> --}}
            {{-- <div class="col-lg-2 col-6 col-md-3">
                <select class="form-select">
                    <option>Show 20</option>
                    <option>Show 30</option>
                    <option>Show 40</option>
                </select>
            </div> --}}
        </div>
    </header> <!-- card-header end// -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th scope="col">Kota Tujuan</th>
                        <th scope="col">Biaya Ongkir</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-end"> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($shippingfees as $shippingfee)
                    <tr>
                        <td>{{ $shippingfee->id }}</td>
                        <td><b>{{ $shippingfee->tujuan }}</b></td>
                        <td>Rp. {{ $shippingfee->harga }}</td>
                        <td>{{ $shippingfee->created_at }}</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-md rounded font-sm">Ubah</a>
                            <div class="dropdown">
                                <a href="/admin/edit-shippingfee/{{ $shippingfee->id }}" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <a href="{{ route('deleteShippingFeeID', $shippingfee->id) }}" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                            </div> <!-- dropdown //end -->
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div> <!-- table-responsive //end -->
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
@endsection