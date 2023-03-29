<div class="bootstrap-modal">
    <div class="modal fade" id="editModal-{{ $usr->id }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="edit-{{ $usr->id }}" method="post" action="{{ url('admin/ubahadmin/'.($usr->id)) }}"  >
                        {{-- <form id="edit-{{ $usr->id }}" action="{{ route('ubahadmin') }}" method="POST" > --}}
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $usr->id }}">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $usr->name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" id="username" name="username" class="form-control" value="{{ $usr->username }}" required>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" id="password" name="password" class="form-control" value="{{ $usr->password }}">
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No HP</label>
                                <div class="col-sm-9">
                                    <input type="number" id="no_hp" name="no_hp" class="form-control" value="{{ $usr->no_hp }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select class="form-control default-select" id="role" name="role">
                                        <option selected>{{ $usr->role }}</option>
                                        <option>admin</option>
                                        <option>pemohon</option>
                                        <option>verifikator berkas</option>
                                        <option>verifikator lapangan</option>
                                        <option>pemberi rekomendasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status User</label>
                                <div class="col-sm-9">
                                    <select class="form-control default-select" id="status_users" name="status_users">
                                        <option selected>{{ $usr->status_users }}</option>
                                        <option>aktif</option>
                                        <option>tidak aktif</option>\
                                    </select>
                                </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>