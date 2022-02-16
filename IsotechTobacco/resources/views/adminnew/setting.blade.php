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
                    <form>
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
                                            <input class="form-control" type="file">
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
                                        <input id="jam_buka" name="jam_buka" class="form-control" type="time">
                                    </div>
                                    <div class="col-lg-6  mb-3">
                                        <label class="form-label">Jam Tutup</label>
                                        <input id="jam_tutup" name="jam_tutup" class="form-control" type="time">
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
                                        <input id="fb_account" name="fb_account" class="form-control" type="text" placeholder="abcd@facebook.com">
                                    </div><!-- col .// -->
                                    <div class="col-lg-12  mb-3">
                                        <label class="form-label">Twitter</label>
                                        <input id="twitter_account" name="twitter_account" class="form-control" type="text" placeholder="abcd@twitter.com">
                                    </div> <!-- col .// -->
                                    <div class="col-lg-12  mb-3">
                                        <label class="form-label">Instagram</label>
                                        <input id="ig_account" name="ig_account" class="form-control" type="text" placeholder="abcd@instagram.com">
                                    </div><!-- col .// -->
                                </div> <!-- row.// -->
                            </div>  <!-- col.// -->
                        </div> <!-- row.// -->
                        <button class="btn btn-primary" type="submit">Simpan semua perubahan</button> &nbsp;
                        <button class="btn btn-light rounded font-md" type="reset">Reset</button>
                    </form>
                </section> <!-- content-body .// -->
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card-body .//end -->
</div>
@endsection