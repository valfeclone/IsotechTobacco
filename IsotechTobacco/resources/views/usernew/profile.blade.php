@extends('layouts.usernew.base')

@section('meta-title')
    Gondrong Tobacco | Semua Produk
@endsection

@section('main-content')
<div>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Profile
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3 class="mb-30">Profil User</h3>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row my-2">
                                    <div class="p-3 w-50  section-title ">Nama </div>
                                    <div class="p-3 w-50  ">{{ $items->name }}</div>
                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="p-3 w-50  section-title ">Email </div>
                                    <div class="p-3 w-50  ">{{ $items->email }}</div>
                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="p-3 w-50  section-title ">Alamat </div>
                                    <div class="p-3 w-50  ">{{ $items->alamat }}</div>
                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="p-3 w-50  section-title ">Nomor Telepon </div>
                                    <div class="p-3 w-50  ">{{ $items->nomor_telpon }}</div>
                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="p-3 w-50  section-title ">Kota </div>
                                    <div class="p-3 w-50  ">{{ $items->kota }}</div>
                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="p-3 w-50  section-title ">Kodepos </div>
                                    <div class="p-3 w-50  ">{{ $items->kodepos }}</div>
                                </div>
                                {{-- <div class="d-flex flex-row my-2">
                                    <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Submit &amp; Register</button>
                                </div> --}}
                            </div>
                            <div class="divider-text-center mt-15 mb-15">
                                <span></span>
                            </div>
                            <ul class="d-flex flex-row justify-content-center btn-login list_none text-center mb-15 ">
                                <li><a href="/updateprofil" class="btn btn-google hover-up">Edit Profil</a></li>
                                {{-- <li><a href="/" class="btn btn-google hover-up">Reset Password</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection