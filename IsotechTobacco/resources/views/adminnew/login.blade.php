@extends('layouts.adminnew.auth-base')

@section('meta-title')
    Gondrong Tobacco | Admin Login
@endsection

@section('main-content')
<div class="card mx-auto card-login">

    <div class="card-body">
        <h4 class="card-title mb-4">Sign in Admin</h4>
        <form method="POST" action="/admin/login">
            @csrf
            <div class="mb-3">
                <input id="email" name="email" class="form-control" placeholder="Email" type="text">
            </div> <!-- form-group// -->
            <div class="mb-3">
                <input id="password" name="password" class="form-control" placeholder="Password" type="Password">
            </div> <!-- form-group// -->
            <div class="mb-3">
                <a href="/admin-forgot-password" class="float-end font-sm text-muted">Forgot password?</a>
            </div> 
            <!-- form-group form-check .// -->
            <div class="mb-4">
                <button type="submit" class="btn btn-primary w-100"> Login </button>
            </div> <!-- form-group// -->
        </form>
        <p class="mt-1 text-center small text-muted mb-15">or sign up with</p>
        <div class="d-grid gap-3 mb-4">
            <a href="#" class="btn w-100 btn-light font-sm">
                <svg aria-hidden="true" class="icon-svg" width="20" height="20" viewBox="0 0 20 20">
                    <path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 002.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4"></path>
                    <path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 01-7.18-2.54H1.83v2.07A8 8 0 008.98 17z" fill="#34A853"></path>
                    <path d="M4.5 10.52a4.8 4.8 0 010-3.04V5.41H1.83a8 8 0 000 7.18l2.67-2.07z" fill="#FBBC05"></path>
                    <path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 001.83 5.4L4.5 7.49a4.77 4.77 0 014.48-3.3z" fill="#EA4335"></path>
                </svg> Sign in using Google
            </a>
        </div>
        <p class="text-center mb-4">Don't have account? <a href="/admin/register">Sign up</a></p>
        @if($errors->any())
            <div class="mb-3">
                <p class="text-center font-sm text-danger ">{{$errors->first()}}</p>
            </div>
        @endif
    </div>
</div>
@endsection