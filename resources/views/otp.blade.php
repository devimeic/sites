
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Siteplan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="/disk/images/logo-magetan.png">
    <link href="/disk/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet">
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
									<div class="text-center mb-3">
										<a href="index.html"><img src="/disk/images/logo-magetan.png" alt="logo" width="70"></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">OTP Nomor Hp</h4>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('kirim-otp') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="form-group">
                                            <label class="text-white"><strong>Nomor OTP</strong></label>
                                            <input type="number" class="form-control text-black" name="otp" placeholder="Masukkan OTP yang dikirim Ke Whatshap Anda">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block mt-3">Kirim OTP</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="/disk/vendor/global/global.min.js"></script>
	<script src="/disk/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Custom script -->
    <script src="/disk/vendor/deznav/deznav.min.js"></script>
    <script src="/disk/js/custom.min.js"></script>
    <script src="/disk/js/deznav-init.js"></script>
</body>

</html>
