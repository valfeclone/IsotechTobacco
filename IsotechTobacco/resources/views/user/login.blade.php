@extends('layouts.user.base')

@section('meta-title')
    Gondrong Tobacco | Login
@endsection

@section('main-content')
<div>
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
                                        <h3 class="mb-30">Login</h3>
                                    </div>
                                    <form method="post" action="/login">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" required="" id="email" name="email" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                    <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                </div>
                                            </div>
                                            <a class="text-muted" href="/forgot-password">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Log in</button>
                                        </div>
                                        <p class="text-center mt-4 mb-2">Don't have account? <a href="/register">Sign up</a></p>
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