<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Siteplan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/disk/images/logo-magetan.png">
    @stack('css')
    <link href="/disk/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/disk/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet">
    @livewireStyles

    <style>
      #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang loader */
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #main-loader {
        visibility: hidden; /* Menyembunyikan konten utama */
    }

    </style>
</head>

<body class="h-100">


    @include('layouts.navbar')


    @include('layouts.sidebar')

    <div class="content-body">
        <div class="container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible alert-alt fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                    <strong>Berhasil!</strong> {{ $message }}
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
            @if ($message = Session::get('failed'))
                <div class="alert alert-danger alert-dismissible alert-alt fade show">
                    <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                    <strong>Gagal!</strong> {{ $message }}
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif

        @yield('isi')


        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
 <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/disk/vendor/global/global.min.js"></script>
	<script src="/disk/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/disk/js/custom.min.js"></script>
	<script src="/disk/js/deznav-init.js"></script>

    @stack('js')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />

    <!--  loader untuk logout -->
    <script>
        function logoutWithLoader() {
        // Tampilkan loader
        document.getElementById('preloader').style.display = 'flex';

        // Sembunyikan konten utama
        document.getElementById('main-wrapper').style.visibility = 'hidden';

        // Proses logout setelah penundaan 1 detik
        setTimeout(function() {
            // Lakukan logout
            document.getElementById('logout-form').submit();

            // Tampilkan kembali konten utama setelah logout selesai
            document.getElementById('main-loader').style.visibility = 'visible';
        }, 1000);
    }

    </script>

    <!--  loader untuk sidebar -->
    <script>
        // Menampilkan loader sebelum konten menu dimuat
        function showLoader() {
        // Mendapatkan elemen loader
        var loader = document.getElementById("preloader");

        // Menampilkan loader
        loader.style.display = "block";
        }

        // Menghilangkan loader setelah konten menu dimuat
        function hideLoader() {
        // Mendapatkan elemen loader
        var loader = document.getElementById("preloader");

        // Menghilangkan loader
        loader.style.display = "none";
        }

        // Memanggil fungsi showLoader saat menu di-klik
        document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan semua elemen menu
        var menuItems = document.querySelectorAll("a:not([data-toggle='dropdown']):not(#wizard)");

        // Menambahkan event listener untuk setiap elemen menu
        menuItems.forEach(function(item) {
            item.addEventListener("click", function() {
            showLoader();
            });
        });
        });

        // Memanggil fungsi hideLoader saat konten menu selesai dimuat
        window.addEventListener("load", function() {
        hideLoader();
        });

    </script>
</body>

</html>
