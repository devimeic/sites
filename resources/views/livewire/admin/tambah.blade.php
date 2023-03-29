<!-- Modal -->
<div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-create" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" wire:click.prevent="resetInput()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form wire:submit.prevent="submit" class=”form-horizontal”>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" wire:model="name" class="form-control text-black" placeholder="Masukan Nama" >
                                @error("name") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" id="username" name="username" wire:model="username" class="form-control text-black" placeholder="Masukan Username">
                                @error("username") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="password" wire:model="password" class="form-control text-black" placeholder="Masukan Password">
                                @error("password") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="number" id="no_hp" name="no_hp" wire:model="no_hp" class="form-control text-black" placeholder="Masukan No HP">
                                @error("no_hp") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row row">
                            <label class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select class="form-control text-black default-select" id="role" name="role" wire:model="role">
                                    <option selected class="">Pilih</option>
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
                                <select class="form-control text-black default-select" id="status_users" name="status_users" wire:model="status_users">
                                    <option selected class="">Pilih</option>
                                    <option value="aktif">aktif</option>
                                    <option value="tidak aktif">tidak aktif</option>
                                @error("status_users") <span class="text-danger">{{ $message }}</span>@enderror
                            </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" wire:model="id">
                        <button type="button" class="btn btn-danger" wire:click.prevent="resetInput()" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-primary" wire:click.prevent="submit()">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

