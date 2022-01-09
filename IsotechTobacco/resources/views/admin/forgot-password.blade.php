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
                                        <h3 class="mb-30">Admin Reset Password</h3>
                                    </div>
                                    
                                    <form method="POST" action="/admin-forgot-password">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Your Email">
                                        </div>
                                    
                                        

                                        @error('email')
                                        <div class="alert alert-danger mt-2">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Send Password Reset Link</button>
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