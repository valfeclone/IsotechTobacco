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
                                <h3 class="mb-30">Edit Profile 1</h3>
                            </div>
                            <p class="mb-50 font-sm">
                                Edit profile melalui form dibawah ini.
                            </p>
                            <form method="POST" action="/updateprofil">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required="" id="name" name="name" value="{{ $items->name }}" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="email" name="email" value="{{ $items->email }}" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" pattern=".{8,}" placeholder=" Password minimal 8 karakter">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Confirm password">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="nomor_telpon" name="nomor_telpon" value="{{ $items->nomor_telpon }}" placeholder="Nomor Telfon">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="alamat" name="alamat" value="{{ $items->alamat }}" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="kodepos" name="kodepos" value="{{ $items->kodepos }}" placeholder="Alamat">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="custom_select">
                                            <select id="kota" name="kota" class="form-control select-active">
                                                @foreach ($cities as $city)
                                                <option value="{{ $city->tujuan }}" {{ $items->kota ==  $city->tujuan ? 'selected' : ''}}>{{ $city->tujuan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="text" required="" id="kota" name="kota" value="{{ $items->kota }}" placeholder="Kota">
                                </div> -->
                                <div class="form-group">
                                    <button type="" class="btn btn-fill-out btn-block hover-up" name="login">Update &amp; Profil</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection