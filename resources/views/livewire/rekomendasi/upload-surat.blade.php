<div>
   <div class="card">
    <div class="card-header">
        <h4 class="card-title">Unggah Surat Rekomendasi</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Developer</label>
            <div class="col-sm-9">
                <input type="text" wire:model="nama_dev" class="form-control text-black @error('nama_dev') is invalid @enderror" placeholder="Masukkan Nama Developer" readonly>
                @error("nama_dev") <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Proyek</label>
            <div class="col-sm-9">
                <input type="text" wire:model="nama_pro" class="form-control text-black @error('nama_pro') is invalid @enderror" placeholder="Masukkan Nama Proyek" readonly>
                @error("nama_pro") <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nomor Surat Rekomendasi</label>
            <div class="col-sm-9">
                <input type="text" wire:model="nomor_rekomendasi" class="form-control text-black @error('nomor_rekomendasi') is invalid @enderror" placeholder="Masukkan Nomor Rekomendasi">
                @error("nomor_rekomendasi") <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">File Surat Rekomendasi</label>

            <div class="col-sm-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-upload color-muted"></i>
                        </span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input"  wire:model="files">
                        <label class="custom-file-label">Pilih file</label>
                    </div>
                    @if($files)

                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-success"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                    @endif
                    @error("files") <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>
    <div class=" card-footer">
        <div class="d-flex justify-content-center" >
            <button  wire:click="revisi()" class="btn btn-danger sw-btn-next mx-5" >Di Tolak</button>
            <button  wire:click="setuju()" class="btn btn-success sw-btn-next" >Di Setuju</button>
        </div>
    </div>
   </div>
</div>
