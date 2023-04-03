<!-- Modal -->
<div wire:ignore.self class="modal fade" data-backdrop="static" id="editModal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User {{  $name }}</h5>
                <button type="button" class="close" wire:click.prevent="resetInput()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body" wire:ignore.self>

                    <form wire:submit.prevent="update" class=”form-horizontal”>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text"  wire:model="name" class="form-control text-black" placeholder="Masukan Nama" >
                                @error("name") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text"  wire:model="username" class="form-control text-black" placeholder="Masukan Username">
                                @error("username") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
{{--
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password"  wire:model="password" class="form-control text-black" placeholder="Masukan Password">
                                @error("password") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div> --}}

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="number"  wire:model="no_hp" class="form-control text-black" placeholder="Masukan No HP">
                                @error("no_hp") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row row">
                            <label class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select class="form-control text-black default-select"  wire:model="role">
                                    <option selected class="">Role</option>
                                    <option value="admin">admin</option>
                                    <option value="pemohon">pemohon</option>
                                    <option value="verifikator berkas">verifikator berkas</option>
                                    <option value="verifikator lapangan">verifikator lapangan</option>
                                    <option value="pemberi rekomendasi">pemberi rekomendasi</option>
                                    @error("role") <span class="text-danger">{{ $message }}</span>@enderror
                                </select>
                            </div>
                        </div>

                        <div class="form-group row row">
                            <label class="col-sm-3 col-form-label">Status User</label>
                            <div class="col-sm-9">
                                <select class="form-control text-black default-select"  wire:model="status_users">
                                <option value="aktif">aktif</option>
                                <option value="tidak aktif">tidak aktif</option>
                                @error("status_users") <span class="text-danger">{{ $message }}</span>@enderror
                            </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" wire:click.prevent="resetInput()" data-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-primary" wire:click.prevent="update" >SIMPAN</button>
                    </div>
                </form>

        </div>
    </div>
</div>

