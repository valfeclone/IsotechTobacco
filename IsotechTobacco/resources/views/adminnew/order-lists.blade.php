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
        <h2 class="content-title card-title">Daftar Pesanan</h2>
        {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
    </div>
    <div>
        <input type="text" placeholder="Cari ID pesanan" class="form-control bg-white">
    </div>
</div>
<div class="card mb-4">
    <header class="card-header">
        <div class="row gx-3">
            <div class="col-lg-4 col-md-6 me-auto">
                <input type="text" placeholder="Cari..." class="form-control">
            </div>
            <div class="col-lg-2 col-6 col-md-3">
                <select class="form-select">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Show all</option>
                </select>
            </div>
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
                        <th>No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-end"> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num = 1;
                    @endphp
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $num }}</td>
                        <td><b>{{ $order->user->name }}</b></td>
                        <td>{{ $order->user->email }}</td>
                        <td>Rp. {{ $order->totalTagihan }}</td>
                        <td><span class="badge rounded-pill alert-warning">{{ $order->statusTransaksi }}</span></td>
                        <td>{{ $order->created_at }}</td>
                        <td class="text-end">
                            <a href="/admin/order-detail/{{ $order->id }}" class="btn btn-md rounded font-sm">Detail</a>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <form class="dropdown-menu" method="POST" action="/admin/updateOrder">
                                    <input type="hidden" name="order_id" value={{ $order->id }}>
                                    <label class="dropdown-menu" for="statusTransaksi">Status:</label>
                                        <select class="dropdown-item" name="statusTransaksi" id="statusTransaksi">
                                            <option class="dropdown-item" value="belum dibayar">belum dibayar</option>
                                            <option class="dropdown-item" value="sedang diproses">sedang diproses</option>
                                            <option class="dropdown-item" value="dalam perjalanan">dalam perjalanan</option>
                                            <option class="dropdown-item" value="sudah selesai">sudah selesai</option>
                                    </select>
                                    <button class="dropdown-item text-success" type="submit">Ganti Status</button>
                                    <form method="POST" action="/admin/delete-order/{{ $order->id }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </form>
                                    {{-- <a class="dropdown-item" href="#">Lihat detail</a>
                                    <a class="dropdown-item" href="#">Ubah info</a> --}}
                                    {{-- <form method="POST" action="/admin/delete-order/{{ $order->id }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form> --}}
                                <div class="dropdown-menu">
                                    {{-- <a class="dropdown-item" href="#">Lihat detail</a>
                                    <a class="dropdown-item" href="#">Ubah info</a> --}}
                                    
                                </div>
                            </div> <!-- dropdown //end -->
                        </td>
                    </tr>
                    @php
                        $num++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div> <!-- table-responsive //end -->
    </div> <!-- card-body end// -->
</div> <!-- card end// -->
@endsection