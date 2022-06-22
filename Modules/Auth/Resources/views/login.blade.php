@extends('auth::layouts.master')

@section('content')
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="index.html"><img src="{{ asset('assets/images/logo-ki.png') }}" alt=""  style="width: 300px; height:110px;"></a>
                                </div>
                                <h4 class="text-center mb-4">Masuk Ke Akun Anda</h4>
                                <form action="{{ route('auth.verifikasi') }}" method="POST" name="form_login">

                                    @csrf

                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" name="email" class="form-control" value="hallo@contoh.com" required autocomplete="email" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" name="password" class="form-control" value="Password" required autocomplete="current-password">
                                    </div>
                                    <div class="row d-flex justify-content-between mt-4 mb-2">
                                        <div class="mb-3">
                                           <div class="form-check custom-checkbox ms-1">
                                                <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Ingat saya</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <a href="page-forgot-password.html">Lupa Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Belum punya Akun? <a class="text-primary" href="{{route('auth.register')}}">Daftar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection