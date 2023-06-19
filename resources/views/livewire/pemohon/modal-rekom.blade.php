<div class="bootstrap-modal">
    <div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-rekom" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berkas</h5>
                    <button type="button" class="close"   data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">

                <div class="card-body" >
                    <div class="row" style="height: 400px;">

                        {{-- <div class="basic-form"> --}}
                            {{-- {{ $files }} --}}
                            @if (!is_null($rekom))

                                <iframe style="width:100%; height:100%; border:none; z-index:999999;" type="application/pdf" src="{{ asset(str_replace('public', 'storage', $rekom)) }}" frameborder="0" ></iframe>
                            @else
                                <h1>Berkas Kosong</h1>
                            @endif
                            {{-- <embed style="width:100%; border:none; z-index:999999;" type="application/pdf" src="{{ asset(str_replace('public', 'storage', $files)) }}" frameborder="0" > --}}

                                {{-- </div> --}}
                </div>
            </div>
            <div class="modal-footer" wire:ignore>
                <button  wire:ignore.self type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
</div>
