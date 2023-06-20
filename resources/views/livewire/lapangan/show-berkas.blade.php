<div>
    @push('css')

        <link rel="stylesheet" type="text/css" href="/disk/pikaday.css">
    @endpush
    <div class="card">
        <div class="card-body">
            <div class="">
                <div class="table-responsive">
                    <table class="table table-responsive-sm text-black">
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


    <script src="/disk/vendor/moment/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/disk/pikaday.js"></script>
    <script src="/disk/id.js"></script>
    <script>
        moment.locale('id');
        new Pikaday({
        field: document.getElementById('selectedDate'),
        format: 'dddd D MMMM YYYY',
        // format: 'D MMM YYYY',
        showTime       : true,
        position       : 'top right'
    })
    </script>

@endpush
</div>
