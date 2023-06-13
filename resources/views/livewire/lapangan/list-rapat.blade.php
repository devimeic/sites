<div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rapat</h4>
            </div>

            <div class="input-group search-area m-3">
                <div class="input-group-append">
                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                </div>
                <input type="text" wire:model="search" class="form-control" placeholder="Cari Disini...">
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example3" class="table table-responsive-md text-black">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Proyek</th>
                                <th>Agenda</th>
                                <th>Jadwal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = ($rapat->currentpage() - 1) * $rapat->perpage() + 1;
                            @endphp

                        @foreach ($rapat as $key )

                            <tr>
                                <td><strong>{{ $no++ }}</strong></td>
                                <td> {{ $key->rapat->nama_pro }} </td>
                                <td> {{ $key->agenda }} </td>
                                <td>{{ $key->jadwal }}</td>
                                <td class="d-flex">
                                    <button class="btn btn-info shadow btn-xs sharp mr-1" wire:click="edit({{ $key->id }})" data-target="#modal-jadwal" data-toggle="modal"
                                    data-placement="top" title="Edit Rapat"><i
                                    class="fa fa-pencil color-muted"></i> </button>
                                    <button class="btn btn-danger shadow btn-xs sharp mr-1" wire:click="delete({{ $key->id }})"
                                    data-placement="top" title="Hapus Rapat"><i
                                    class="fa fa-trash-o color-muted"></i> </button>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <ul class="pagination pagination-gutter pagination-primary no-bg">
                    {{ $rapat->links() }}
                </ul>
            </div>
        </div>
    </div>
    @include('livewire.lapangan.modal-jadwal')


    @push('js')

    <script src="/disk/vendor/moment/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/disk/pikaday.js"></script>
    <script src="/disk/id.js"></script>
    <script>
        moment.locale('id');
        new Pikaday({
        field: document.getElementById('selectedDate'),
        format: 'dddd d MMMM YYYY',
        // format: 'Y-m-d',
        showTime       : true,
        position       : 'top right'
    })
    </script>
    @endpush
</div>
