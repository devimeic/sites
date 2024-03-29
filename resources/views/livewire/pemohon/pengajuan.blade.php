<div>
@push('css')
    <!-- Form step -->
    <link href="/disk/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
@endpush

{{-- @section('isi') --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('list-pengajuan') }}">list pengajuan</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Form Pengajuan</a></li>
    </ol>
</div>
<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Pengajuan</h4>
            </div>
            <div class="card-body">
                <div wire:ignore.self  class="form-wizard order-create">
                    <ul class="nav nav-wizard"  >
                        <li><a class="wizard w-100 h-100 rounded-fullborder border-primary btn mx-5{{ $step > 0 ? 'btn-primary bg-primary  text-white mx-5' : '' }} {{  $step == 0 ? 'rounded-fullborder bg-primary text-white mx-5' : '' }}">
                            <span class="w-100 px-2">Developer</span>
                        </a></li>
                        <li><a class="wizard w-100 h-100 rounded-full border-primary btn mx-5{{ $step > 1 ? 'btn-primary bg-primary  text-white mx-5' : '' }} {{  $step == 1 ? 'rounded-fullborder bg-primary text-white mx-5' : '' }}" >
                            <span class="w-100 px-2">Pengajuan</span>
                        </a></li>
                        <li><a class="wizard w-100 h-100 rounded-full border-primary btn mx-5{{ $step > 2 ? 'btn-primary bg-primary  text-white mx-5' : '' }} {{  $step == 2 ? 'rounded-fullborder bg-primary text-white mx-5' : '' }}" >
                            <span class="w-100 px-2">Tipe Bangunan</span>
                        </a></li>
                        <li><a class="wizard w-100 h-100 rounded-full border-primary btn mx-5{{ $step > 3 ? 'btn-primary bg-primary  text-white mx-5' : '' }} {{  $step == 3 ? 'rounded-fullborder bg-primary text-white mx-5' : '' }}" >
                            <span class="w-100 px-2">Upload Berkas</span>
                        </a></li>
                    </ul>
                    <form wire:submit.prevent="submit">
                    <div class="">
                        @if ($step == 0)
                        <div wire:ignore.self id="developer" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Developer</label>
                                        <div class="col-sm-9">
                                            <select wire:model="dev" class="form-control default-select text-black" >
                                                <option value="">Pilih Developer</option>
                                                <option value="PT">PT</option>
                                                <option value="Developer">Developer</option>
                                                @error("dev") <span class="text-danger">{{ $message }}</span>@enderror
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Developer</label>
                                        <div class="col-sm-9">
                                            <input type="text" wire:model="nama_dev" class="form-control text-black @error('nama_dev') is invalid @enderror" placeholder="Masukkan Nama Developer">
                                            @error("nama_dev") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Developer</label>
                                        <div class="col-sm-9">
                                            <textarea rows="4" wire:model="alamat_dev" class="form-control text-black @error('alamat_dev') is invalid @enderror" placeholder="Masukkan Alamat Developer"></textarea>
                                            @error("alamat_dev") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="no_hp" name="no_hp" class="form-control text-black" value="{{ Auth::user()->no_hp }}" readonly>
                                            @error("no_hp") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Asosiasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" wire:model="asosiasi" class="form-control text-black @error('asosiasi') is invalid @enderror" placeholder="Masukkan asosiasi">
                                            @error("asosiasi") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Anggota Asosiasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" wire:model="no_anggota" class="form-control text-black @error('no_anggota') is invalid @enderror" placeholder="Masukkan Nomor Anggota Asosiasi">
                                            @error("no_anggota") <span class="text-danger">{{ $message }}</span>@enderror
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
                                            <input type="text" wire:model="nama_pro" class="form-control text-black @error('nama_pro') is invalid @enderror" placeholder="Masukkan Nama Proyek">
                                            @error("nama_pro") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Proyek</label>
                                        <div class="col-sm-9">
                                            <textarea rows="4" wire:model="alamat_pro" class="form-control text-black @error('alamat_dev') is invalid @enderror" placeholder="Masukkan Alamat Developer"></textarea>
                                            @error("alamat_pro") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" wire:model="pemohon1" class="form-control text-black @error('pemohon1') is invalid @enderror" placeholder="Masukkan Pemohon / Pemberi Kuasa 1">
                                            @error("pemohon1") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP Pemohon 1</label>
                                        <div class="col-sm-9">
                                            <input type="number" wire:model="tel_pemohon1" class="form-control text-black @error('tel_pemohon1') is invalid @enderror" placeholder="Masukkan Nomor HP Pemohon 1">
                                            @error("tel_pemohon1") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" wire:model="pemohon2" class="form-control text-black @error('pemohon2') is invalid @enderror" placeholder="Masukkan Pemohon / Pemberi Kuasa 2">
                                            @error("pemohon2") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP Pemohon 2</label>
                                        <div class="col-sm-9">
                                            <input type="number" wire:model="tel_pemohon2" name="tel_pemohon2" class="form-control text-black @error('tel_pemohon2') is invalid @enderror" placeholder="Masukkan Nomor HP Pemohon 2">
                                            @error("tel_pemohon2") <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Luas Total</label>
                                        <div class="col-sm-9">
                                            <input type="number" wire:model="total" class="form-control text-black @error('total') is invalid @enderror" placeholder="Masukkan Luas Total">
                                            @error("total") <span class="text-danger">{{ $message }}</span>@enderror
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
                                        <div class="add-input">
                                            <div class="row mt-3">
                                                <div class="col-xl-3">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label class="text-black">Kategori</label>
                                                            <select class="form-control default-select text-black" wire:model="kategori.0" >
                                                                <option value="">Pilih Kategori</option>
                                                                <option value="Ruko">1 - Ruko</option>
                                                                <option value="Perumahan">2 - Perumahan</option>
                                                            </select>
                                                            @error("kategori.0") <span class="text-danger">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label class="text-black">Tipe Bangunan</label>
                                                            <input type="text" wire:model="tipe.0" class="form-control text-black" placeholder="Masukkan Type Bangunan">
                                                            @error("tipe.0") <span class="text-danger">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label class="text-black">Jumlah unit</label>
                                                            <input type="number" wire:model="juml_unit.0" class="form-control text-black" placeholder="Masukkan Jumlah Unit">
                                                            @error("juml_unit.0") <span class="text-danger">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-1">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <button type="button" class="btn btn-primary" wire:click.prevent="add({{ $i }})">
                                                                <i class="fa fa-plus color-primary"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($inputs as $key => $value)
                                        <div class=" add-input">
                                            <div class="row mt-3">
                                                <div class="col-xl-3">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label class="text-black">Kategori</label>
                                                            <select class="form-control default-select text-black" wire:model="kategori.{{ $value }}">
                                                                <option value="">Pilih Kategori</option>
                                                                <option value="Ruko">1 - Ruko</option>
                                                                <option value="Perumahan">2 - Perumahan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label class="text-black">Tipe Bangunan</label>
                                                            <input type="text" wire:model="tipe.{{ $value }}" class="form-control text-black" placeholder="Masukkan Type Bangunan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label class="text-black">Jumlah unit</label>
                                                            <input type="number" wire:model="juml_unit.{{ $value }}" class="form-control text-black" placeholder="Masukkan Jumlah Unit">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-1">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <button type="button" class="btn btn-danger" wire:click='removee({{ $key }})' wire:click.prevent="remove({{ $value }})">
                                                                <i class="fa fa-minus color-danger"></i>
                                                            </button>
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
                                            <input type="number" wire:model="jln_saluran" class="form-control text-black" placeholder="Masukkan Jalan & Saluran">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-black">/m<sup>2</sup></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Taman</label>
                                        <div class="col-sm-5">
                                            <input type="number" wire:model="taman" class="form-control text-black" placeholder="Masukkan Luas Taman">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-black">/m<sup>2</sup></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RTH</label>
                                        <div class="col-sm-5">
                                            <input type="number" wire:model="rth" class="form-control text-black" placeholder="Masukkan Luas RTH">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-black">/m<sup>2</sup></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sarana Peribadatan</label>
                                        <div class="col-sm-5">
                                            <input type="number" wire:model="ibadah" class="form-control text-black" placeholder="Masukkan Sarana Peribadatan">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-black">/m<sup>2</sup></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sarana Olahraga</label>
                                        <div class="col-sm-5">
                                            <input type="number" wire:model="olahraga" class="form-control text-black" placeholder="Masukkan Sarana Olahraga">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-black">/m<sup>2</sup></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sarana Kesehatan</label>
                                        <div class="col-sm-5">
                                            <input type="number" wire:model="kesehatan" class="form-control text-black" placeholder="Masukkan Sarana Kesehatan">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-black">/m<sup>2</sup></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Lain-Lain</label>
                                        <div class="col-sm-3">
                                            <input type="text" wire:model="keterangan_lain.0" class="form-control text-black" placeholder="Masukkan Lain-lain">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" wire:model="luas_lain.0" class="form-control text-black" placeholder="Luas">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="text-black">/m<sup>2</sup></label>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-primary" wire:click.prevent="add_lain({{ $l }})">
                                                <i class="fa fa-plus color-primary"></i>
                                            </button>
                                        </div>
                                    </div>

                                    @foreach($inputs_lain as $key => $value)
                                    <div class="add-input2">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-3">
                                                <input type="text" wire:model="keterangan_lain.{{ $value }}" class="form-control text-black" placeholder="Masukkan Lain-lain">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" wire:model="luas_lain.{{ $value }}" class="form-control text-black" placeholder="Luas">
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="text-black">/m<sup>2</sup> </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-danger" wire:click.prevent="remove_lain({{ $key }})" wire:click="remove_lainn({{ $value }})">
                                                    <i class="fa fa-minus color-danger"></i>
                                                </button>
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
                                                    <th>Unggah</th>
                                                </tr>
                                                {{-- {{ $pengajuan_id }} --}}
                                                {{-- @json($berkas_id)
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

                                                    <td class="input-group mt-4">
                                                        <input wire:model="nama_berkas.{{ $value->id }}" type="file" wire:loading.attr="disabled" class="custom-file-input">
                                                        <label class="custom-file-label">Pilih file</label>
                                                        @error("nama_berkas.".$value->id) <span class="text-danger">{{ $message }}</span>@enderror
                                                    </td>
                                                    <td>
                                                        <div wire:loading wire:target="nama_berkas.{{ $value->id }}">Diproses...</div>
                                                    </td>




                                                    @if (isset($nama_berkas[$value->id]))
                                                    @if ($nama_berkas[$value->id])
                                                    @php
                                                        $previewUrl =[];
                                                        $directori = strtolower(str_replace(' ', '_', $this->nama_pro));
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


                                                    @endif
                                                    @endif

                                                </tr>

                                            </tbody>
                                            @endforeach
                                        </table>
                                        <div class="col-lg-8 alert alert-primary notification mt-4">
                                            <Strong>Note</Strong>
                                            <ul>
                                                <li>- Beberapa Berkas Harus Di Upload Di Beri Tanda <strong>*</strong></li>
                                                <li>- Beberapa Berkas Tidak Wajib Di Upload</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        @endif

                    </div>
                    <div class="toolbar" role="toolbar" style="text-align: right;">
                        <div class="d-flex justify-content-between">
                            @if ($step == 0)
                            <button class="btn btn-primary  disabled mx-3" type="button">Sebelumnya</button>

                            @endif
                            @if ($step > 0)
                            <a class="btn btn-primary sw-btn-prev mx-3" wire:click.prevent="minus()" wire:loading.class="disabled" type="button">Sebelumnya</a>
                            @endif
                            @if ($step <3)
                            <button type="submit" class="btn btn-primary sw-btn-next" >Selanjutnya</button>
                            @endif
                            @if ($step == 3)
                            <div>
                                <a wire:click.prevent="draft" class="btn btn-danger mx-2" wire:loading.attr="disabled" >Draft
                                    <div  wire:loading.delay.longest wire:target="draft" class="spinner-border spinner-border-sm text-light mx-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </a>
                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target=".bd-example-modal-sm">Lanjutkan</button>
                            </div>
                            @include('livewire.pemohon.modal-konfirmasi')
                            @endif
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
Content body end
***********************************-->

{{-- @endsection --}}

@push('js')
    <script src="/disk/vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="/disk/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="/disk/js/plugins-init/jquery.validate-init.js"></script>
    <!-- Form Steps -->
    <script src="/disk/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>

    <script>
        $(document).ready(function(){
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });
    </script>
@endpush
@include('modal-preview')


</div>
