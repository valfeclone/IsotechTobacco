@extends('layouts.adminnew.base')

@section('meta-title')
    Admin Gondrong | Setting
@endsection

@section('menu-aside')
<ul class="menu-aside">
    @include('components.admin.asidenew.dashboard')
    @include('components.admin.asidenew-active.setting')
    @include('components.admin.asidenew.banner')
    @include('components.admin.asidenew.product')
    @include('components.admin.asidenew.order')
    @include('components.admin.asidenew.addproduct')
    @include('components.admin.asidenew.transaction')
    @include('components.admin.asidenew.shipping')
</ul>
<hr>
<br>
<br>
@endsection

@section('main-section')
<div class="content-header">
    <h2 class="content-title">Pengaturan</h2>
</div>
<div class="card">
    <div class="card-body">
        <div class="row gx-5">
            <aside class="col-lg-3 border-end">
                <nav class="nav nav-pills flex-lg-column mb-4">
                    <a class="nav-link active" aria-current="page" href="#">Umum</a>
                </nav>
            </aside>
            <div class="col-lg-9">
                <section class="content-body p-xl-4">
                    @if ($items == null)
                        <form method="POST" action="/admin/update-profile" enctype='multipart/form-data'>
                            @csrf
                            <div class="row border-bottom mb-4 pb-4">
                                <div class="col-md-5">
                                    <h5>Logo</h5>
                                    <p class="text-muted" style="max-width:90%">
                                        Masukkan logo toko yang akan muncul di bagian header dan footer website</p>
                                </div> <!-- col.// -->
                                <div class="col-md-7">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h4>Media</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-upload">
                                                <img src="{{ asset('images/admin/imgs/theme/upload.svg') }}" alt="">
                                                <input 
                                                id="logo"
                                                class="form-control" type="file" name="logo">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <div class="row border-bottom mb-4 pb-4">
                                <div class="col-md-5">
                                    <h5>Informasi Toko</h5>
                                    <p class="text-muted" style="max-width:90%">Informasi ini akan ditampilkan pada footer website</p>
                                </div> <!-- col.// -->
                                <div class="col-lg-7">
                                    <div class="row gx-3">
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <textarea name="deskripsi" id="description" rows="4" placeholder="tulis disini" class="form-control"></textarea>
                                            {{-- <input id="deskripsi" name="deskripsi" class="form-control" type="text" placeholder="Toko ini adalah..."> --}}
                                        </div><!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Kontak</label>
                                            <input id="kontak" name="kontak" class="form-control" type="text" placeholder="+1234567890">
                                        </div><!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Alamat</label>
                                            <input id="alamat" name="alamat" class="form-control" type="text" placeholder="Isikan Alamat">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Hari Buka</label>
                                            <input id="hari_buka" name="hari_buka" class="form-control" type="text" placeholder="Senin - Jumat">
                                        </div><!-- col .// -->
                                        <div class="col-lg-6  mb-3">
                                            <label class="form-label">Jam Buka</label>
                                            <input id="jam_buka" name="jam_buka" class="form-control" type="text">
                                        </div>
                                        <div class="col-lg-6  mb-3">
                                            <label class="form-label">Jam Tutup</label>
                                            <input id="jam_tutup" name="jam_tutup" class="form-control" type="text">
                                        </div><!-- col .// -->
                                    </div> <!-- row.// -->
                                </div>  <!-- col.// -->
                            </div> <!-- row.// -->
                            <div class="row border-bottom mb-4 pb-4">
                                <div class="col-md-5">
                                    <h5>Media Sosial</h5>
                                    <p class="text-muted" style="max-width:90%">Informasi ini akan ditampilkan pada footer website</p>
                                </div> <!-- col.// -->
                                <div class="col-lg-7">
                                    <div class="row gx-3">
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Facebook</label>
                                            <input id="fb_account" name="facebook" class="form-control" type="text" placeholder="abcd@facebook.com">
                                        </div><!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Twitter</label>
                                            <input id="twitter_account" name="twitter" class="form-control" type="text" placeholder="abcd@twitter.com">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Instagram</label>
                                            <input id="ig_account" name="instagram" class="form-control" type="text" placeholder="abcd@instagram.com">
                                        </div><!-- col .// -->
                                    </div> <!-- row.// -->
                                </div>  <!-- col.// -->
                            </div> <!-- row.// -->
                            <input class="btn btn-primary" type="submit" value="Simpan"> &nbsp;
                            {{-- <button class="btn btn-light rounded font-md" type="reset">Reset</button> --}}
                        </form>  
                    @else
                        <form method="POST" action="/admin/update-profile" enctype='multipart/form-data'>
                            @csrf
                            <div class="row border-bottom mb-4 pb-4">
                                <div class="col-md-5">
                                    <h5>Logo</h5>
                                    <p class="text-muted" style="max-width:90%">
                                        Masukkan logo toko yang akan muncul di bagian header dan footer website</p>
                                </div> <!-- col.// -->
                                <div class="col-md-7">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h4>Media</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-upload">
                                                <img src="{{ asset('images/admin/imgs/theme/upload.svg') }}" alt="">
                                                <input 
                                                id="logo"
                                                class="form-control" type="file" name="logo">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <div class="row border-bottom mb-4 pb-4">
                                <div class="col-md-5">
                                    <h5>Informasi Toko</h5>
                                    <p class="text-muted" style="max-width:90%">Informasi ini akan ditampilkan pada footer website</p>
                                </div> <!-- col.// -->
                                <div class="col-lg-7">
                                    <div class="row gx-3">
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <textarea name="deskripsi" id="description" rows="4" placeholder="tulis disini" class="form-control">{{ $items->deskripsi }}
                                            </textarea>
                                            {{-- <input id="deskripsi" name="deskripsi" class="form-control" type="text" placeholder="Toko ini adalah..."> --}}
                                        </div><!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Kontak</label>
                                            <input id="kontak" name="kontak" class="form-control" type="text" placeholder="+1234567890" value="{{ $items->kontak }}">
                                        </div><!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Alamat</label>
                                            <input id="alamat" name="alamat" class="form-control" type="text" placeholder="Isikan Alamat" value="{{ $items->alamat }}">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Hari Buka</label>
                                            <input id="hari_buka" name="hari_buka" class="form-control" type="text" placeholder="Senin - Jumat" value="{{ $items->hari_buka }}">
                                        </div><!-- col .// -->
                                        <div class="col-lg-6  mb-3">
                                            <label class="form-label">Jam Buka</label>
                                            <input id="jam_buka" name="jam_buka" class="form-control" type="text" value="{{ $items->jam_buka }}">
                                        </div>
                                        <div class="col-lg-6  mb-3">
                                            <label class="form-label">Jam Tutup</label>
                                            <input id="jam_tutup" name="jam_tutup" class="form-control" type="text" value="{{ $items->jam_tutup }}">
                                        </div><!-- col .// -->
                                    </div> <!-- row.// -->
                                </div>  <!-- col.// -->
                            </div> <!-- row.// -->
                            <div class="row border-bottom mb-4 pb-4">
                                <div class="col-md-5">
                                    <h5>Media Sosial</h5>
                                    <p class="text-muted" style="max-width:90%">Informasi ini akan ditampilkan pada footer website</p>
                                </div> <!-- col.// -->
                                <div class="col-lg-7">
                                    <div class="row gx-3">
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Facebook</label>
                                            <input id="fb_account" name="facebook" class="form-control" type="text" value="{{ $items->facebook }}">
                                        </div><!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Twitter</label>
                                            <input id="twitter_account" name="twitter" class="form-control" type="text" value="{{ $items->twitter }}">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Instagram</label>
                                            <input id="ig_account" name="instagram" class="form-control" type="text" value="{{ $items->instagram }}">
                                        </div><!-- col .// -->
                                    </div> <!-- row.// -->
                                </div>  <!-- col.// -->
                            </div> <!-- row.// -->
                            <input class="btn btn-primary" type="submit" value="Simpan"> &nbsp;
                            {{-- <button class="btn btn-light rounded font-md" type="reset">Reset</button> --}}
                        </form>
                    @endif
                </section> <!-- content-body .// -->
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card-body .//end -->
</div>
@endsection