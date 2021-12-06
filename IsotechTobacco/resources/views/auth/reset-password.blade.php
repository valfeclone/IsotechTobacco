@extends('layouts.user.base')

@section('meta-title')
    Gondrong Tobacco | Reset Password
@endsection

@section('main-content')
<div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Login 
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-5 justify-content-center">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Reset Password</h3>
                                    </div>
                                    
                                    <form method="POST" action="/reset-password">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ Request::old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Alamat Email">
                                            @error('email')
                                            <div class="alert alert-danger mt-2">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password" placeholder="Masukkan Password Baru">
                                            @error('password')
                                            <div class="alert alert-danger mt-2">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                        
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                                required autocomplete="new-password" placeholder="Masukkan Konfirmasi Password Baru">
                                        </div>
        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection