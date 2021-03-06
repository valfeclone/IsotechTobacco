@extends('layouts.usernew.auth-base')

@section('meta-title')
    Gondrong Tobacco | Login
@endsection

@section('main-content')
<div>
    <!-- EDIT MANG. INI ALERT MESSAGE KALO LOGIN ERROR -->
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
                                        <div class="divider-text-center mt-15 mb-15">
                                            <span> or</span>
                                        </div>
                                        <!-- mang edit nih. tambahan login with google -->
                                        <ul class="btn-login list_none text-center mb-15"> 
                                            <!-- <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With Facebook</a></li> <br> -->
                                            <li class="mt-2"><a href="/auth/google" class="btn btn-google hover-up">Login With Google</a></li>
                                        </ul>
                                        <p class="text-center mt-4 mb-2">Don't have account? <a href="/register">Sign up</a></p>
                                        @if($errors->any())
                                        <div class="mb-3">
                                            <p class="text-center font-sm text-danger ">{{$errors->first()}}</p>
                                        </div>
                                        @endif
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