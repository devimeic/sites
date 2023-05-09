<div class="modal fade" id="editpassword" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Password</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form action="{{ Auth::user()->role == 'admin' ? route('edit-password-admin') : ( Auth::user()->role == 'pemohon' ? route('edit-password-pemohon') : (Auth::user()->role == 'berkas' ? route('edit-password-berkas'): (Auth::user()->role == 'lapangan' ? route('edit-password-lapangan') : (Auth::user()->role == 'rekomendasi' ? route('edit-password-rekomendasi') : ''))) ) }}" class=”form-horizontal”>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="password" class="form-control text-black" value="{{ $data->password }}" >
                                @error("password") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Ulangi Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="password" class="form-control text-black" value="{{ $data->password }}" >
                                @error("password") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
        </div>
    </div>
</div>
