<div>


    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">Form Pengajuan
                        {{ $pengajuan->nama_pro }}

                </h4>

                </div>
                <div class="card-body">

                    {{-- @foreach ($pengajuan as $key) --}}
                    <div wire:ignore.self  class="form-wizard order-create">
                        <ul class="nav nav-wizard d-flex justify-content-between"  >
                                <li><a class="w-100 h-100 rounded-fullborder border-primary btn mx-4{{ $step > 0 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 0 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(0)">
                                    <span class="w-100 px-2">Developer</span>
                                </a></li>
                                <li><a class="w-100 h-100 rounded-full border-primary btn mx-4{{ $step > 1 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 1 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(1)">
                                    <span class="w-100 px-2">Pengajuan</span>
                                </a></li>
                                <li><a class="w-100 h-100 rounded-full border-primary btn mx-4{{ $step > 2 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 2 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(2)">
                                    <span class="w-100 px-2">Tipe Bangunan</span>
                                </a></li>
                                <li><a class="w-100 h-100 rounded-full border-primary btn mx-4{{ $step > 3 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 3 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(3)">
                                    <span class="w-100 px-2">Upload Berkas</span>
                                </a></li>
                            @if ($pengajuan->status_pengajuan == 'Selesai')
                            <li><a class="w-100 h-100 rounded-full border-primary btn mx-4{{ $step > 4 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 4 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(4)">
                                <span class="w-100 px-2">Rekomendasi</span>
                            </a></li>
                        @endif

                            {{-- @elseif ($key->status_pengajuan == 'Selesai') --}}
                                {{-- <li><a class="w-100 h-100 rounded-fullborder border-primary btn mx-4{{ $step > 0 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 0 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(0)">
                                    <span class="w-100 px-2">Developer</span>
                                </a></li>
                                <li><a class="w-100 h-100 rounded-full border-primary btn mx-4{{ $step > 1 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 1 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(1)">
                                    <span class="w-100 px-2">Pengajuan</span>
                                </a></li>
                                <li><a class="w-100 h-100 rounded-full border-primary btn mx-4{{ $step > 2 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 2 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(2)">
                                    <span class="w-100 px-2">Tipe Bangunan</span>
                                </a></li>
                                <li><a class="w-100 h-100 rounded-full border-primary btn mx-4{{ $step > 5 ? 'btn-primary bg-primary  text-white mx-4' : '' }} {{  $step == 5 ? 'rounded-fullborder bg-primary text-white mx-4' : '' }}" wire:click.prevent="jump(3)">
                                    <span class="w-100 px-2">Upload Berkas</span>
                                </a></li>

                        @endforeach --}}


                        </ul>
                        <div class="">
                            @if ($step == 0)
                            <div wire:ignore.self id="developer" class="tab-pane" role="tabpanel">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Developer</label>
                                            <div class="col-sm-9">
                                                <input class="form-control text-black" id="dev" name="dev" value="{{ $pengajuan->dev }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Developer</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nama_dev" name="nama_dev" class="form-control text-black" value="{{ $pengajuan->nama_dev }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Alamat Developer</label>
                                            <div class="col-sm-9">
                                                <textarea rows="4" id="alamat_proyek" name="alamat_proyek" class="form-control text-black" readonly>{!! $pengajuan->alamat_dev !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="no_hp" name="no_hp" class="form-control text-black"  value="{{ $pengajuan->no_hp }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Asosiasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="asosiasi" name="asosiasi" class="form-control text-black"  value="{{ $pengajuan->asosiasi }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor Anggota Asosiasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="no_anggota" name="no_anggota" class="form-control text-black"  value="{{ $pengajuan->no_anggota }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @elseif ($step == 1)
                            <div wire:ignore.self id="nama-proyek" class="tab-pane" role="tabpanel">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Proyek</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nama_proyek" name="nama_proyek" class="form-control text-black"  value="{{ $pengajuan->nama_pro}}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Alamat Proyek</label>
                                            <div class="col-sm-9">
                                                <textarea rows="4" id="alamat_proyek" name="alamat_proyek" class="form-control text-black" readonly>{!! $pengajuan->alamat_pro !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 1</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="pemohon_satu" name="pemohon_satu" class="form-control text-black"  value="{{ $pengajuan->pemohon1 }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor HP Pemohon 1</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="hp_satu" name="hp_satu" class="form-control text-black"  value="{{ $pengajuan->tel_pemohon1 }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 2</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="pemohon_duan" name="pemohon_duan" class="form-control text-black"  value="{{ $pengajuan->pemohon2 }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor HP Pemohon 2</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="hp_dua" name="hp_dua" class="form-control text-black"  value="{{ $pengajuan->tel_pemohon2 }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Luas Total</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="total" name="total" class="form-control text-black"  value="{{ $pengajuan->total }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @elseif ($step == 2)
                            <div wire:ignore.self id="type" class="tab-pane" role="tabpanel">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <strong class="text-black"> * Kavling Efektif</strong>

                                        @foreach ($tipe as $key)
                                            <div class="add-input">
                                                <div class="row mt-3">
                                                    <div class="col-xl-3">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <label class="text-black">Kategori</label>
                                                                <input class="form-control text-black default-select" id="kategori" name="kategori"  value="{{ $key->kategori }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <label class="text-black">Type Bangunan</label>
                                                                <input type="text" id="tipe" name="tipe" class="form-control text-black"  value="{{ $key->tipe }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <label class="text-black">Jumlah unit</label>
                                                                <input type="number" id="juml_unit" name="juml_unit" class="form-control text-black"  value="{{ $key->juml_unit }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach



                                        <strong class="text-black">* Prasarana Sarana & Utilitas</strong>
                                        <div class="form-group row mt-3">
                                            <label class="col-sm-3 col-form-label">Jalan & Saluran</label>
                                            <div class="col-sm-5">
                                                <input type="number" id="jln_saluran" name="jln_saluran" class="form-control text-black"  value="{{ $jln_saluran[0] }}" readonly>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="text-black">/m<sup>2</sup></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Taman</label>
                                            <div class="col-sm-5">
                                                <input type="number" id="taman" name="taman" class="form-control text-black"  value="{{ $taman[0] }}" readonly>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="text-black">/m<sup>2</sup></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">RTH </label>
                                            <div class="col-sm-5">
                                                <input type="number" id="rth" name="rth" class="form-control text-black"  value="{{ $rth[0] }}" readonly>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="text-black">/m<sup>2</sup></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Sarana Peribadatan</label>
                                            <div class="col-sm-5">
                                                <input type="number" id="ibadah" name="ibadah" class="form-control text-black"  value="{{ $ibadah[0] }}" readonly>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="text-black">/m<sup>2</sup></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Sarana Olahraga</label>
                                            <div class="col-sm-5">
                                                <input type="number" id="olahraga" name="olahraga" class="form-control text-black"  value="{{ $olahraga[0] }}" readonly>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="text-black">/m<sup>2</sup></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Sarana Kesehatan</label>
                                            <div class="col-sm-5">
                                                <input type="number" id="kesehatan" name="kesehatan" class="form-control text-black"  value="{{ $kesehatan[0] }}" readonly>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="text-black">/m<sup>2</sup></label>
                                            </div>
                                        </div>

                                        @foreach($lain as $key )
                                        <div class="add-input2">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Lain-lain</label>
                                                <div class="col-sm-3">
                                                    <input type="text" value="{{ $key->keterangan }}"  class="form-control text-black" placeholder="Masukkan Lain-lain" readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="number" value="{{ $key->luas }}"  class="form-control text-black" placeholder="Luas" readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label class="text-black">/m<sup>2</sup></label>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @elseif ($step == 3)
                            <div wire:ignore.self id="upload-berkas" class="tab-pane" role="tabpanel">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <div class="table-responsive">
                                            <table class="table table-responsive-sm text-black">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Persyaratan</th>
                                                        <th>Lihat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp

                                                    @foreach ($berkas as $brks => $value)
                                                    <input type="hidden" wire:model="berkas_id.{{ $value->id }}">
                                                    <tr>
                                                        <td><strong>{{ $no++ }}</strong></td>
                                                        <td>{!! nl2br(e($value->nama_berkas))!!}</td>

                                                        <td >

                                                                <button type="button" data-toggle="modal" wire:click.prevent="showBerkas({{ $value->id }})" data-target="#modal-berkas" class="btn btn-info shadow btn-xs sharp mr-1"
                                                                    data-toggle="tooltip" data-placement="top" title="Lihat Berkas">
                                                                    <i class="fa fa-eye color-muted"></i>
                                                                </button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            @endif
                            @if ($step  > 3)
                            <div wire:ignore.self id="rekomendasi" class="tab-pane" role="tabpanel">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <strong class="text-black"> Nomor Surat Rekomendasi : </strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Developer</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="nama_dev" class="form-control text-black @error('nama_dev') is invalid @enderror" placeholder="Masukkan Nama Developer" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Proyek</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="nama_pro" class="form-control text-black @error('nama_pro') is invalid @enderror" placeholder="Masukkan Nama Proyek" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor Surat Rekomendasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="nomor_rekomendasi" class="form-control text-black @error('nomor_rekomendasi') is invalid @enderror" placeholder="Masukkan Nomor Rekomendasi" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">File Surat Rekomendasi</label>

                                            <div class="col-sm-5">
                                                <div class="input-group mb-3">
                                                    <button type="button" data-toggle="modal" wire:click.prevent="showRekom()" data-target="#modal-rekom" class="btn btn-info shadow btn-xs sharp mr-1"
                                                        data-toggle="tooltip" data-placement="top" title="Lihat Surat Rekomendasi">
                                                        <i class="fa fa-eye color-muted"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif


                        </div>
                        <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;">
                            <div class="d-flex justify-content-between">
                                @if ($step == 0)
                                <button class="btn btn-primary  disabled mx-3" type="button">Sebelumnya</button>

                                @endif
                                @if ($step > 0)
                                <a class="btn btn-primary sw-btn-prev mx-3" wire:click.prevent="minus()" type="button">Sebelumnya</a>
                                @endif

                                @if ($pengajuan->status_pengajuan == 'Selesai')

                                    @if ($step < 4)
                                    <button wire:click.prevent="plus()" class="btn btn-primary sw-btn-next" >Selanjutnya</button>
                                    @endif
                                    @if ($step == 4)
                                    <a href="{{ route('riwayat-pemohon') }}"class="btn btn-primary sw-btn-next" type="button">Kembali</a>

                                    @endif
                                @else
                                    @if ($step < 3)
                                    <button wire:click.prevent="plus()" class="btn btn-primary sw-btn-next" >Selanjutnya</button>
                                    @endif
                                    @if ($step == 3)
                                    <a href="{{ route('riwayat-pemohon') }}"class="btn btn-primary sw-btn-next" type="button">Kembali</a>

                                    @endif
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
    Content body end
    ***********************************-->

    {{-- @endsection --}}

    @include('livewire.pemohon.modal-berkas')
    @include('livewire.pemohon.modal-rekom')

</div>
