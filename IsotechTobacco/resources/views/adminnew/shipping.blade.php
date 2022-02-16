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
    @include('components.admin.asidenew.transaction')
    @include('components.admin.asidenew-active.shipping')
</ul>
<hr>
<br>
<br>
@endsection

@section('main-section')
<div class="content-header">
    <h2 class="content-title">Daftar Pengiriman</h2>
    <div>
        {{-- <a href="#" class="btn btn-light rounded  font-md">Import</a> --}}
        <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i>Tambah</a>
    </div>
</div>
<div class="card mb-4">
    <header class="card-header">
        <div class="row gx-3">
            <div class="col-lg-4 col-md-6 me-auto">
                <input type="text" placeholder="Cari..." class="form-control">
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <select class="form-select">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Show all</option>
                </select>
            </div>
            {{-- <div class="col-lg-2 col-md-3 col-6">
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
                        <th>Ekspedisi</th>
                        <th>Kode Pos Penjual</th>
                        <th>Kode Pos Pembeli</th>
                        <th>Biaya (per kg)</th>
                        <th class="text-end"> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6 class="mb-0 title">Ekspedisi Makmur</h6>
                        </td>
                        <td>123456</td>
                        <td>654321</td>
                        <td>Rp13.000</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">Lihat detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="mb-0 title">Ekspedisi Makmur</h6>
                        </td>
                        <td>123456</td>
                        <td>654321</td>
                        <td>Rp13.000</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">Lihat detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="mb-0 title">Ekspedisi Makmur</h6>
                        </td>
                        <td>123456</td>
                        <td>654321</td>
                        <td>Rp13.000</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">Lihat detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="mb-0 title">Ekspedisi Makmur</h6>
                        </td>
                        <td>123456</td>
                        <td>654321</td>
                        <td>Rp13.000</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">Lihat detail</a>
                        </td>
                    </tr>
                </tbody>
            </table> <!-- table-responsive.// -->
        </div>
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
@endsection