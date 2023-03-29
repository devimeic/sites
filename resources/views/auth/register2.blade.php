
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
										<a href="index.html"><img src="disk/images/logo-magetan.png" alt="logo" width="70"></a>
									</div>
                                    <h4 class="text-center mb-4 text-white font-weight-bold">Registrasi Akun</h4>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="mb-1 text-white"><strong>Nama</strong></label>
                                            <input id="name" type="text" class="form-control text-black @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input id="username" type="text" class="form-control text-black @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Masukkan Username" required autocomplete="username" autofocus>

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nomor Telepon</strong></label>
                                            <input id="no_hp" type="text" class="form-control text-black @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan Nomor Telepon" required autocomplete="no_hp" autofocus>

                                            @error('no_hp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input id="password" type="password" class="form-control text-black @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Ulangi Password</strong></label>
                                            <input id="password-confirm" type="password" class="form-control text-black " name="password_confirmation" placeholder="Masukkan Ulang Password " required autocomplete="new-password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-light text-primary btn-block">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Sudah Punya Akun? <a class="text-white font-weight-bold" href="/login">Login</a></p>
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

</body>
</html>
