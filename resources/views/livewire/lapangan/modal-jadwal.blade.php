<div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-jadwal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jadwalkan Rapat</h5>
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body" >
                {{-- <form action=""> --}}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agenda </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control text-black" wire:model="agenda" placeholder="Masukkan agenda rapat">
                            @error('agenda')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Waktu </label>
                        <div class="col-sm-9">
                            <input type="text" id="selectedDate" autocomplete="false" class="form-control text-black"  wire:model.lazy="selectedDate"   placeholder="Saturday 24 June 2017 - 00:00">
                            @error('selectedDate')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        <button wire:click="setuju()"  class="btn btn-primary"  >Simpan</button>
                    </div>
                {{-- </form> --}}
        </div>
    </div>
</div>
