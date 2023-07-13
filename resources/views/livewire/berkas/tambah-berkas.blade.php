<!-- Modal -->
<div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berkas</h5>
                <button type="button" class="close" wire:click.prevent="resetInput()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form wire:submit.prevent="submit" class=”form-horizontal”>
                        <div class="form-group">
                            <label for="name" class=" col-form-label">Nama Berkas</label>
                            <div class="col">
                                <textarea rows="4" type="text" id="nama_berkas" name="nama_berkas" wire:model="nama_berkas" class="form-control text-black" placeholder="Masukan Nama Berkas" ></textarea>
                                @error("nama_berkas") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class=" col-form-label">Wajib / Tidak diisi</label>
                            <div class="col">
                                <select class="form-control default-select text-black" wire:model="wajib">
                                    <option>Pilih</option>
                                    <option value="wajib">Wajib</option>
                                    <option value="tidak">Tidak Wajib</option>
                                </select>
                                @error("wajib") <span class="text-danger">{{ $message }}</span>@enderror
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

