<div class="modal fade" id="basicModal" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profil</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form id="edit-profil" action="{{ Auth::user()->role == 'admin' ? route('edit-profil-admin') : ( Auth::user()->role == 'pemohon' ? route('edit-profil-pemohon') : (Auth::user()->role == 'berkas' ? route('edit-profil-berkas'): (Auth::user()->role == 'lapangan' ? route('edit-profil-lapangan') : (Auth::user()->role == 'rekomendasi' ? route('edit-profil-rekomendasi') : ''))) ) }}" class=”form-horizontal”>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" class="form-control text-black" value="{{ $data->name }}" >
                                @error("name") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" id="username" name="username" class="form-control text-black" value="{{ $data->username }}">
                                @error("username") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="number" id="no_hp" name="no_hp"  class="form-control text-black" value="{{ $data->no_hp }}">
                                @error("no_hp") <span class="text-danger">{{ $message }}</span>@enderror
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
