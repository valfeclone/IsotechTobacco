@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Banner
@endsection

@section('menu-aside')
<ul class="menu-aside">
    @include('components.admin.asidenew.dashboard')
    @include('components.admin.asidenew.setting')
    @include('components.admin.asidenew-active.banner')
    @include('components.admin.asidenew.product')
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
        <h2 class="content-title card-title">Banner</h2>
        <p>Tambah, ubah, atau hapus banner</p>
    </div>
    {{-- <div>
        <input type="text" placeholder="Cari Banner" class="form-control bg-white">
    </div> --}}
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <form method="POST" action="/admin/create-banner" enctype='multipart/form-data'>
                    @csrf
                    <div class="mb-4">
                        <label class="form-label">Gambar</label>
                        <input id="gambar_banner" name="gambar_banner" class="form-control" type="file">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" placeholder="Type here" class="form-control"></textarea>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Tambahkan banner</button>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Status Checklist
                                </th>
                                <th>ID</th>
                                <th>Link Gambar</th>
                                <th>Deskripsi</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <form method="POST" action="/admin/toggle-banner/{{ $item->id }}">
                                            @csrf
                                            <input type="hidden" name="bannerID" value="{{ $item->id }}" />
                                            @if ($item->status_tampil == 1)
                                                <button class="btn btn-success" type="submit">checklist</button>
                                            @else
                                                <button class="btn btn-danger" type="submit">unchecklist</button>
                                            @endif
                                            {{-- <input class="form-check-input" type="checkbox" value="" /> --}}
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $item->id }}</td>
                                <td><u>{{ $item->link_gambar }}</u></td>
                                <td>{{ $item->deskripsi }}</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Lihat detail</a>
                                            <a class="dropdown-item" href="#">Ubah info</a>
                                            <form method="POST" action="/admin/delete-banner/{{ $item->id }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item text-danger" href="#">Hapus</button>
                                            </form>
                                        </div>
                                    </div> <!-- dropdown //end -->
                                </td>
                            </tr>  
                            @endforeach
                            {{-- <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>21</td>
                                <td><u>http://banner-image.com</u></td>
                                <td>banner kemerdekaan</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Lihat detail</a>
                                            <a class="dropdown-item" href="#">Ubah info</a>
                                            <a class="dropdown-item text-danger" href="#">Hapus</a>
                                        </div>
                                    </div> <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>2</td>
                                <td><u>http://banner-image.com</u></td>
                                <td>banner promo</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Lihat detail</a>
                                            <a class="dropdown-item" href="#">Ubah info</a>
                                            <a class="dropdown-item text-danger" href="#">Hapus</a>
                                        </div>
                                    </div> <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>3</td>
                                <td><u>http://banner-image.com</u></td>
                                <td>banner diskon</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Lihat detail</a>
                                            <a class="dropdown-item" href="#">Ubah info</a>
                                            <a class="dropdown-item text-danger" href="#">Hapus</a>
                                        </div>
                                    </div> <!-- dropdown //end -->
                                </td>
                            </tr>
                        
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>8</td>
                                <td><u>http://banner-image.com</u></td>
                                <td>banner sale</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Lihat detail</a>
                                            <a class="dropdown-item" href="#">Ubah info</a>
                                            <a class="dropdown-item text-danger" href="#">Hapus</a>
                                        </div>
                                    </div> <!-- dropdown //end -->
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div> <!-- .col// -->
        </div> <!-- .row // -->
    </div> <!-- card body .// -->
</div>
@endsection