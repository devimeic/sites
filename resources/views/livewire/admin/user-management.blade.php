<div>
    @push('css')
        <!-- Datatable -->
        <link href="/disk/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    @endpush
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar User</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <button data-toggle="modal" data-target="#modal-create" class="btn btn-rounded btn-primary mb-4" id="btn-create-post"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                        </span>Tambah User</button>
                    </div>
                    <div class="col">
                        <div class="input-group search-area d-xl-inline-flex d-none">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                            <input type="text" wire:model="search" class="form-control" placeholder="Search here...">
                        </div>
                    </div>
                </div>


                <div class="table-responsive" >
                    <table  class="table table-striped table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Username</th>
                                {{-- <th>Password</th> --}}
                                <th>No HP</th>
                                <th>Rule</th>
                                <th>Status </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = ($data->currentpage() - 1) * $data->perpage() + 1;
                            @endphp

                            @foreach ($data as $usr)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $usr->name }}</td>
                                <td>{{ $usr->username }}</td>
                                <td>{{ $usr->no_hp }}</td>
                                <td>{{ $usr->role }}</td>
                                <td> @if ($usr->status_users == 'aktif')
                                    <span class="badge light badge-success">{{ $usr->status_users }}</span></td>
                                    @else
                                    <span class="badge light badge-danger">{{ $usr->status_users }}</span></td>
                                    @endif</td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" data-toggle="modal" wire:click.prevent="edit({{ $usr->id }})" data-target="#editModal" class="btn btn-primary shadow btn-xs sharp mr-1"
                                            data-toggle="tooltip" data-placement="top" title="Edit User">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" data-toggle="modal" wire:click.prevent="resetpsswd({{ $usr->id }})" data-target="#reset" class="btn btn-secondary shadow btn-xs sharp mr-1"
                                            data-toggle="tooltip" data-placement="top" title="Hapus User">
                                            <i class="fa fa-key"></i>
                                        </button>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card-footer">
                {{ $data->links() }}
            </div>
        </div>
    </div>
    @include('livewire.admin.edit')

    @include('livewire.admin.tambah')

    @include('livewire.admin.resetpassword')
    @push('js')
         <!-- Datatable -->
        <script src="/disk/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/disk/js/plugins-init/datatables.init.js"></script>

        <script>
             window.addEventListener('simpan', event => {
                $("#modal-create").modal('hide');
            })
             window.addEventListener('update2', event => {
                $("#editModal").modal('hide');
            })
             window.addEventListener('update3', event => {
                $("#resetpsswrd").modal('hide');
            })
        </script>
    @endpush
</div>