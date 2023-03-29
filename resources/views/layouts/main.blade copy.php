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
    <link href="/disk/css/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="/disk/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Form step -->
    <link href="/disk/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="/disk/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/disk/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Required vendors -->
    <script src="/disk/vendor/global/global.min.js"></script>
	<script src="/disk/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/disk/js/custom.min.js"></script>
    <script src="/disk/js/deznav-init.js"></script>

     <!-- Datatable -->
     <script src="/disk/vendor/datatables/js/jquery.dataTables.min.js"></script>
     <script src="/disk/js/plugins-init/datatables.init.js"></script>

      <!-- Form Steps -->
	<script src="/disk/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>
    
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function () {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
     @livewireScripts
</body>

</html>