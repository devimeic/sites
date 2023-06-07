<!-- Modal -->
<div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-create" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Tambah User</h5>
                <button type="button" class="close" wire:click.prevent="resetInput()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">

                <form wire:submit.prevent="submit" >
                <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model="name" class="form-control text-black" placeholder="Masukan Nama" >
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

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password"  wire:model="password" class="form-control text-black" placeholder="Masukan Password">
                                @error("password") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="number"  wire:model="no_hp" class="form-control text-black" placeholder="Masukan No HP">
                                @error("no_hp") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select class="form-control text-black default-select"  wire:model="role">
                                    <option selected class="">Pilih</option>
                                    <option value="admin">admin</option>
                                    <option value="pemohon">pemohon</option>
                                    <option value="verifikator berkas">verifikator berkas</option>
                                    <option value="verifikator lapangan">verifikator lapangan</option>
                                    <option value="pemberi rekomendasi">pemberi rekomendasi</option>
                                </select>
                                @error("role") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="col-sm-3 col-form-label">Status User</label>
                            <div class="col-sm-9">
                                <select class="form-control text-black default-select"  wire:model="status_users">
                                    <option selected class="">Pilih</option>
                                    <option value="aktif">aktif</option>
                                    <option value="tidak aktif">tidak aktif</option>
                                </select>
                                @error("status_users") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>


                    </form>



                        <div class="modal-footer">
                            <input type="hidden" name="id" wire:model="id">
                            <button type="button" class="btn btn-danger" wire:click.prevent="resetInput()" data-dismiss="modal">TUTUP</button>
                            <button type="button" class="btn btn-primary" wire:click.prevent="submit()"   wire:loading.attr="disabled">
                                SIMPAN
                                <div  wire:loading.delay.longest wire:target="submit" class="spinner-border spinner-border-sm text-light mx-1" role="status">
                                    <span class="sr-only">Loading...</span>
                                    </div></button>
                        </div>
            </div>
        </div>
    </div>
</div>

