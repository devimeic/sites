<div wire:ignore.self class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body text-center font-weight-bold">Apakah yakin ingin mengirim persyaratan ?</div>
            <div class="row d-flex justify-content-center m-3">
                <button type="button" class="btn btn-danger light mx-2" data-dismiss="modal">Batal</button>
                <button wire:click.prevent="submit" class="btn btn-primary" wire:loading.attr="disabled">
                    Kirim
                    <div  wire:loading.delay.longest wire:target="submit" class="spinner-border spinner-border-sm text-light mx-1" role="status">
                        <span class="sr-only">Loading...</span>
                      </div></button>
            </div>
        </div>
    </div>
</div>
