<!-- Modal -->
<div wire:ignore.self class="modal fade" data-backdrop="static" id="reset" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password User </h5>
                <button type="button" class="close" wire:click.prevent="resetInput()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form wire:submit.prevent="submit" class=”form-horizontal”>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="password" wire:model="password" class="form-control text-black" placeholder="Masukan Password">
                                @error("password") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="password_confirmation" name="password_confirmation" wire:model="password_confirmation" class="form-control text-black" placeholder="Masukkan Konfirmasi Password">
                                @error("password_confirmation") <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        @php
                            $match = null;
                            if ($password && $password_confirmation) {
                                $match = ($password === $password_confirmation);
                            }
                        @endphp

                        @if (! is_null($match) && ! $match)
                            <div class="alert alert-danger">
                                Password dan konfirmasi password tidak cocok
                            </div>
                        @endif

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" wire:model="id">
                        <button type="button" class="btn btn-danger" wire:click.prevent="resetInput()" data-dismiss="modal">TUTUP</button>
                        <button type="button" class="btn btn-primary" wire:click.prevent="updatepsswrd()">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

