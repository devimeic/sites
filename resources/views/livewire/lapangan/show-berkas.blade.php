<div>
    @push('css')
        <!-- Daterange picker -->
        {{-- <link href="/disk/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Clockpicker -->
        <link href="/disk/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <!-- asColorpicker -->
        <link href="/disk/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet"> --}}
        <!-- Material color picker -->
        {{-- <link href="/disk/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet"> --}}
        <!-- Pick date -->
        {{-- <link rel="stylesheet" href="/disk/vendor/pickadate/themes/default.css">
        <link rel="stylesheet" href="/disk/vendor/pickadate/themes/default.date.css"> --}}
        <link rel="stylesheet" type="text/css" href="/disk/pikaday.css">
    @endpush
    <div class="card">
        <div class="card-body">
            <div class="">
                <div class="table-responsive">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Persyaratan</th>
                                <th>Lihat</th>
                                <th>Setuju</th>
                                <th>Di Tolak</th>
                                <th>Catatan</th>


                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                                $index = 0;
                            @endphp

                            @foreach ($berkas as $brks => $value)
                            {{-- {{ $value }} --}}


                            {{-- <input type="text" wire:model="berkas_id.{{ $index++ }}"  > --}}
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td class="text-black">{!! nl2br(e($value->nama_berkas))!!}</td>

                                <td >
                                    <button type="button" data-toggle="modal" wire:click.prevent="showBerkas({{ $value->id }})" data-target="#modal-berkas" class="btn btn-info shadow btn-xs sharp mr-1"
                                        data-toggle="tooltip" data-placement="top" title="Lihat Berkas">
                                        <i class="fa fa-eye color-muted"></i>
                                    </button>
                                </td>
                                <td style="width: 12%">
                                        <label class="radio-inline"><input type="radio"  wire:change="simpan({{$value->id}},0)" wire:model="status_brks.{{ $value->id }}" name="optradio{{ $value->id }}"  value="setuju">
                                            <i class="flaticon-381-success-2 btn btn-success shadow btn-xs sharp mx-2"></i>
                                        </label>

                                </td>
                                <td style="width: 12%">
                                        <label class="radio-inline">
                                            <input type="radio" wire:change="simpan({{$value->id }},1)"  wire:model="status_brks.{{ $value->id }}" name="optradio{{ $value->id }}" value="tolak" >
                                            <i class="flaticon-381-error btn btn-danger shadow btn-xs sharp mx-2"></i>
                                        </label>
                                </td>
                                <td style="width: 20%">
                                    <div class="input-group input-primary pt-4">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text">Catatan </span>
                                        </div> --}}
                                        <textarea rows="3" class="form-control text-black" wire:change="catatansimpan({{$value->id}})" wire:model="catatan.{{$value->id }}"></textarea>
                                    </div>
                                </td>



                            </tr>

                        </tbody>

                        @endforeach
                    </table>


                </div>
            </div>

        </div>
        <div class=" card-footer">
            <div class="d-flex" >
                <div class="p-2 flex-grow-1"></div>
                <div class="p-2">
                    <button  wire:click="revisi()" class="btn btn-danger sw-btn-next" >Revisi</button>
                </div>
                <div class="p-2">
                    {{-- <button  wire:click="setuju()" class="btn btn-success sw-btn-next" >Setuju</button> --}}
                    <button type="button" data-toggle="modal" data-target="#modal-jadwal" class="btn btn-success sw-btn-next">Setuju</button>
                    @include('livewire.lapangan.modal-jadwal')
                </div>
            </div>
        </div>
    </div>
    @include('livewire.pemohon.modal-berkas')

@push('js')


<!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="/disk/vendor/moment/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="/disk/vendor/bootstrap-daterangepicker/daterangepicker.js"></script> --}}
    <!-- clockpicker -->
    {{-- <script src="/disk/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="/disk/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="/disk/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="/disk/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script> --}}
    <!-- Material color picker -->
    {{-- <script src="/disk/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> --}}
    <!-- pickdate -->
    {{-- <script src="/disk/vendor/pickadate/picker.js"></script>
    <script src="/disk/vendor/pickadate/picker.time.js"></script>
    <script src="/disk/vendor/pickadate/picker.date.js"></script> --}}
    <script src="/disk/pikaday.js"></script>
    <script src="/disk/id.js"></script>

    <script>
        moment.locale('id');
        // console.log(moment().format('LLLL')); // Output: Selasa, 4 Mei 2023 09.00

        // $('#date-format').bootstrapMaterialDatePicker({
        //     format: 'dddd DD MMMM YYYY - HH:mm'
        // }).on('change', function(e, selectedDate) {
        //     window.livewire.emit('setDate', selectedDate);
        // });

        // var picker = new Pikaday({ field: document.getElementById('selectedDate') });

new Pikaday({
    field: document.getElementById('selectedDate'),
    format: 'dddd d MMMM YYYY',
    // format: 'Y-m-d',
    showTime       : true,
    position       : 'top right'
})


        // function dateSelected(selectedDate) {
        //     window.livewire.emit('setDate', selectedDate);
        // }

    </script>


    <!-- Daterangepicker -->
    {{-- <script src="/disk/js/plugins-init/bs-daterange-picker-init.js"></script> --}}
    <!-- Clockpicker init -->
    {{-- <script src="/disk/js/plugins-init/clock-picker-init.js"></script> --}}
    <!-- asColorPicker init -->
    {{-- <script src="/disk/js/plugins-init/jquery-asColorPicker.init.js"></script> --}}
    <!-- Material color picker init -->
    {{-- <script src="/disk/js/plugins-init/material-date-picker-init.js"></script> --}}
    {{-- <!-- Pickdate -->
    <script src="/disk/js/plugins-init/pickadate-init.js"></script> --}}
@endpush
</div>
