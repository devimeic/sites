@extends('layouts.main')

@section('isi')
<div class="card">
    <div class="card-header">Scan Barcode</div>
    <div class="card-body">
        <h4 class="card-title">Whatsapp API</h4>
        <img class="" src="" alt="QR Code" id="qrcode" style=" display: none; /* Showed when qr code received */
        width: 35%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #efefef;
        border-radius: 4px;">
        <p class="card-text">Logs:

        <ul class="logs"></ul>
        </p>
    </div>
</div>

{{-- <form id="send-message-form">
    @csrf
    <div>
        <label for="number">Phone Number:</label>
        <input type="text" id="number" name="number" required>
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <div>
        <button type="submit">Send Message</button>
    </div>
</form> --}}
@endsection
@push('css')
<style>
    ul.logs {
        max-height: 150px;
        padding: 15px 15px 15px 30px;
        margin-top: 5px;
        border-radius: 4px;
        overflow-y: auto;
        background: #efefef;
        color: #666;
        font-size: 14px;
    }

    ul.logs li:first-child {
        color: green;
    }
</style>
@endpush
@push('js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var socket = io('http://127.0.0.1:8001/');

        socket.on('message', function(msg) {
            $('.logs').prepend($('<li>').text(msg));
        });

        socket.on('qr', function(src) {
            $('#qrcode').attr('src', src);
            $('#qrcode').show();
        });

        socket.on('ready', function(data) {
            $('#qrcode').hide();
        });

        socket.on('authenticated', function(data) {
            $('#qrcode').hide();
        });
    });
</script>
{{-- <script>
    $(document).ready(function() {
        $('#send-message-form').submit(function(event) {
            event.preventDefault();

            // Get the form data
            var number = $('#number').val();
            var message = $('#message').val();

            // Prepare the request data
            var requestData = {
                number: number,
                message: message,
            };

            // Add CSRF token to the request headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Send the AJAX request
            $.ajax({
                url: '{{ route("send-message") }}',
                type: 'POST',
                dataType: 'json',
                data: requestData,
                success: function(response) {
                    // Handle the success response
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script> --}}
@endpush
