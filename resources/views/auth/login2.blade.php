<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Siteplan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="disk/images/logo-magetan.png">
    <link href="disk/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-2">
										<a href="index.html"><img src="disk/images/logo-magetan.png" alt="logo" class="w-25"></a>
									</div>
                                    <h4 class="text-center mb-4 text-white font-weight-bold">Login Akun</h4>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input id="username" type="username" class="form-control text-black  @error('username') is-invalid @enderror" name="username" placeholder="Masukkan Username" value="{{ old('username') }}" autocomplete="username" autofocus>
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input id="password" type="password" class="form-control text-black @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password" autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button id="loginButton" type="submit" class="btn btn-light text-primary btn-block" >Masuk</button>
                                        </div>
                                        <div id="loader" class="text-center" style="display: none;">
                                            <div class="spinner-border text-light" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Belum Punya Akun? <a class="text-white font-weight-bold" href="/register">Registrasi</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->

    <!-- Required vendors -->
    <script src="disk/vendor/global/global.min.js"></script>
	<script src="disk/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="disk/js/custom.min.js"></script>
    <script src="disk/js/deznav-init.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var loginButton = document.getElementById('loginButton');
            var loader = document.getElementById('loader');

            loginButton.addEventListener('click', function() {
                loginButton.style.display = 'none';
                loader.style.display = 'block';
            });
        });
    </script>

</body>

</html>
