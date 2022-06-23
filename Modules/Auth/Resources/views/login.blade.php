<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	{{-- <meta property="og:image" content="https:/workload.dexignlab.com/xhtml/social-image.png" /> --}}
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Komisi Informasi</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/iconfav.png') }}" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>
<body class="vh-100">
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


    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
</body>
</html>
