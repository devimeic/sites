<div wire:ignore.self class="modal fade" data-backdrop="static" id="previewModal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
                <button type="button" class="close"   data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card">

            <div class="card-body" >


                    @if ($preview)
                    <iframe src="{{  asset(str_replace('public/','', $preview)) }}" type="application/pdf" width="100%" height="500">
            @endif

            {{-- <div class="modal-footer" wire:ignore>
                <button  wire:ignore.self type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> --}}
        </div>

        </div>
    </div>
</div>
</div>

