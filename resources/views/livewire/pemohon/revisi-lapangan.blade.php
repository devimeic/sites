<div>
    <div class="card">
        <div class="card-body">
            <div class="basic-form">
            <form wire:submit.prevent="submit">
                <div class="table-responsive">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Persyaratan</th>
                                <th>Lihat Berkas</th>
                                <th>Status</th>
                                <th>catatan</th>
                                <th>Unggah</th>
                            </tr>
                            {{-- @json($berkas) --}}
                            {{-- {{ $pengajuan_id }}
                            @json($berkas_id)
                            @json($nama_berkas) --}}
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($berkas as $brks => $value)
                            <input type="hidden" wire:model="berkas_id.{{ $value->id }}" value="{{ $value->id }}">
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td class="text-black">{!! nl2br(e($value->nama_berkas))!!}</td>

                                <td>
                                    <button type="button" data-toggle="modal" wire:click.prevent="showBerkas({{ $value->id }})" data-target="#modal-berkas" class="btn btn-info shadow btn-xs sharp mr-1"
                                        data-toggle="tooltip" data-placement="top" title="Lihat Berkas">
                                        <i class="fa fa-eye color-muted"></i>
                                    </button>
                                </td>
                                @forelse ($value->upload as $item)
                                @if ( $item->pengajuan_id == $pengajuan->id)
                                <td>

                                    @if ($item->status_lapangan == 'tolak')
                                    <strong class="text-danger"> Tolak</strong>
                                    @else
                                    <strong class="text-success"> Setuju</strong>
                                    @endif
                                </td>
                                    @endif
                                        @empty
                                        <td>
                                            Kosong
                                        </td>
                                {{-- <td>{{ $item->status_lapangan == 'setuju' ? 'Setuju' : ( $item->status_lapangan == 'tolak' ? 'Di Tolak' : 'Kosong' )  }}</td> --}}
                                @endforelse

                                <td style="width: 20%">
                                    <textarea rows="3" class="form-control text-black" wire:model="catatan.{{ $value->id }}" readonly></textarea>
                                </td>

                                <td class="input-group mt-5">
                                    @forelse ($value->upload as $item)
                                        @if ($item->status_lapangan == 'tolak' && $item->pengajuan_id == $pengajuan->id)
                                        {{-- {{ $item->status_lapangan }} --}}
                                        {{-- {{ $this->nama_pro }} --}}
                                            <input wire:model="nama_berkas.{{ $value->id }}" type="file" class="custom-file-input">
                                            <label class="custom-file-label">Pilih file</label>
                                        @else
                                        @endif
                                    @empty
                                    <input wire:model="nama_berkas.{{ $value->id }}" type="file" class="custom-file-input">
                                            <label class="custom-file-label">Pilih file</label>
                                    @endforelse
                                </td>

                                @if (isset($nama_berkas[$value->id]))
                                @if ($nama_berkas[$value->id])
                                @php
                                    $previewUrl =[];
                                    $directori = strtolower(str_replace(' ', '_', $nama_pro));
                                    $tempPath = $nama_berkas[$value->id]->store('public/temp/'.$directori);
                                    $previewUrl[$value->id] = url('storage/'.$tempPath);
                                    // dd($previewUrl);
                                @endphp
                                <td>
                                    <button wire:click.prevent="showPreview('{{ $previewUrl[$value->id] }}')" type="button" class="btn btn-primary" data-toggle="modal" data-target="#previewModal" >
                                        Preview
                                    </button>

                                </td>
                                <td>{{ $nama_berkas[$value->id]->getClientOriginalName() }}</td>
                                <td>
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-success"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                </td>

                                @endif
                                @endif

                            </tr>

                        </tbody>
                        @endforeach
                    </table>

                </div>
                <div  class="toolbar toolbar-bottom mt-4" role="toolbar" style="text-align: right;">
                    <button type="submit"  class="btn btn-primary sw-btn-next"  wire:loading.attr="disabled" >
                        Simpan
                        <div  wire:loading.delay.longest wire:target="submit" class="spinner-border spinner-border-sm text-light mx-1" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                    </button>
                </div>

            </form>
            </div>
        </div>
        @include('livewire.pemohon.modal-berkas')
    </div>
    @include('modal-preview')
</div>
