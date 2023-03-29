<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="basic-form">

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nama" >
                        </div>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title"></div>
                    </div>
                    

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content"></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content"></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-9">
                            <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No HP">
                        </div>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content"></div>
                    </div>

                    <div class="form-group row row">
                        <label class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-9">
                            <select class="form-control default-select" id="role" name="role">
                                <option selected>Role</option>
                                <option value="admin">admin</option>
                                <option value="pemohon">pemohon</option>
                                <option value="verifikator berkas">verifikator berkas</option>
                                <option value="verifikator lapangan">verifikator lapangan</option>
                                <option value="pemberi rekomendasi">pemberi rekomendasi</option>
                            </select>
                        </div>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content"></div>
                    </div>

                    <div class="form-group row row">
                        <label class="col-sm-3 col-form-label">Status User</label>
                        <div class="col-sm-9">
                            <select class="form-control default-select" id="status_users" name="status_users">
                            <option value="aktif">aktif</option>
                            <option value="tidak aktif">tidak aktif</option>
                        </select>
                        </div>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content"></div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">TUTUP</button>
                    <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>
</div>

