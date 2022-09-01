@extends('layouts.usernew.auth-base')

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

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
                <span></span> Register
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
                                <h3 class="mb-30">Create an Account</h3>
                            </div>
                            <p class="mb-50 font-sm">
                                Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy
                            </p>
                            <form method="post" action="/register">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required="" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="nomor_telpon" name="nomor_telpon" placeholder="Nomor Telpon">
                                </div>
                                <div class="form-group">
                                    <input required="" type="password" id="password" name="password" pattern=".{8,}" placeholder=" Password minimal 8 karakter">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" id="alamat" name="alamat" placeholder="Alamat">
                                </div>
                                <div class="form-row">
                                    <div class="form-group ">
                                        <div class="custom_select">
                                            <select id="provinsi" name="provinsi" class="form-select fs-6 fw-normal">
                                                <option value="">Pilih Provinsi..</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group ">
                                        <div class="custom_select">
                                            <select id="kota" name="kota" class="form-select fs-6 fw-normal" disabled>
                                                <option value="">Pilih Kota..</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group ">
                                        <div class="custom_select">
                                            <select id="kecamatan" name="kecamatan" class="form-select fs-6 fw-normal"  disabled>
                                                <option value="">Pilih Kecamatan..</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group ">
                                        <div class="custom_select">
                                            <select id="kelurahan_desa" name="kelurahan_desa" class="form-select fs-6 fw-normal" disabled>
                                                <option value="">Pilih Kelurahan / Desa..</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group ">
                                        <div class="custom_select">
                                            <select id="kodepos" name="kodepos" class="form-select fs-6 fw-normal" disabled>
                                                <option value="">Pilih Kodepos..</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- @if ($cities != null)
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <div class="custom_select">
                                            <select id="kota" name="kota" class="form-control select-active">
                                                <option value="">Pilih Kota..</option>
                                                @foreach ($cities as $city)
                                                <option value="{{ $city->tujuan }}">{{ $city->tujuan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="text" required="" id="kota" name="kota" placeholder="Kota">
                                </div>
                                @endif --}}
                                
                                {{-- <div class="form-group">
                                    <select class="form-control select-active">
                                        <option value="">Choose a option...</option>
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->tujuan }}">{{ $city->tujuan }}</option>
                                        @endforeach
                                </div> --}}
                                {{-- <div class="form-group">
                                    <input required="" type="password" name="password" placeholder="Confirm password">
                                </div> --}}
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                            <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                        </div>
                                    </div>
                                    <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Submit &amp; Register</button>
                                </div>
                            </form>
                            <div class="divider-text-center mt-15 mb-15">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center mb-15">
                                <!-- <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Register With Facebook</a></li> -->
                                <li><a href="/auth/google" class="btn btn-google hover-up">Register With Google</a></li>
                            </ul>
                            <div class="text-muted text-center">Already have an account? <a href="/login">Sign in now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('extra-script')
    <script src="{{ asset('js-new/user/home.js') }}"></script>
@endsection