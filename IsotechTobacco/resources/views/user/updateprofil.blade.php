@extends('layouts.user.base')

@section('meta-title')
    Gondrong Tobacco | Register
@endsection

@section('main-content')
<div>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Update Profil
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
                                <h3 class="mb-30">Update Profil</h3>
                            </div>
                            <form method="POST" action="/updateprofil">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required="" id="name" name="name" value="{{ old('name') }}" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input required="" type="password" id="password" name="password" pattern=".{8,}" placeholder=" Password minimal 8 karakter">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="kota" name="kota" value="{{ old('kota') }}" placeholder="Kota">
                                </div>
                                <div class="form-group">
                                    <input required="" type="password" name="password" placeholder="Confirm password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Update &amp; Profil</button>
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