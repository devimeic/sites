<div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Nama Berkas</h4>
            </div>
            <div class="card-body">
                <button data-toggle="modal" data-target="#modal-create" class="btn btn-rounded btn-primary mb-4" id="btn-create-post">
                    <span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                </span>Tambah Berkas Persyaratan</button>

                <div class="table-responsive">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Berkas Persyaratan</th>
                                <th style="width: 25%;">Wajib / Tidak Wajib diisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($data as $brks)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td class="text-black">{!! nl2br(e($brks->nama_berkas))!!}</td>
                                <td class="text-black text-center">{{ $brks->wajib }}</td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" data-toggle="modal" wire:click.prevent="edit({{ $brks->id }})" data-target="#editModal" class="btn btn-primary shadow btn-xs sharp mr-1">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        {{-- <a><button wire:click.prevent="delete({{ $brks->id }})" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button></a> --}}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('livewire.berkas.edit-berkas')
        @include('livewire.berkas.tambah-berkas')
        <!-- /# card -->
@push('js')
    <script>
        window.addEventListener('simpan', event => {
        $("#modal-create").modal('hide');
    })
        window.addEventListener('update2', event => {
        $("#editModal").modal('hide');
    })
    </script>
@endpush
</div>
