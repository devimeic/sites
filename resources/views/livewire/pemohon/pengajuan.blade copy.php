<div>
@push('css')
    <!-- Form step -->
    <link href="/disk/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
@endpush

@section('isi')
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
                <div id="smartwizard" class="form-wizard order-create">
                    <ul class="nav nav-wizard">
                        <li><a class="nav-link" href="#developer">
                            <span class="w-75">Developer</span>
                        </a></li>
                        <li><a class="nav-link" href="#nama-proyek">
                            <span class="w-75">Pengajuan</span>
                        </a></li>
                        <li><a class="nav-link" href="#type">
                            <span class="w-75">Tipe Bangunan</span>
                        </a></li>
                        <li><a class="nav-link" href="#upload-berkas">
                            <span class="w-75">Upload Berkas</span>
                        </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="developer" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Developer</label>
                                        <div class="col-sm-9">
                                            <select class="form-control default-select" id="dev" name="dev">
                                                <option>PT</option>
                                                <option>Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Developer</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="nama_dev" name="nama_dev" class="form-control @error('nama_dev') is invalid @enderror" placeholder="Masukkan Nama Developer">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Developer</label>
                                        <div class="col-sm-9">
                                            <textarea rows="4" id="alamat_dev" name="alamat_dev" class="form-control @error('alamat_dev') is invalid @enderror" placeholder="Masukkan Alamat Developer"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="no_hp" name="no_hp" class="form-control" value="{{ Auth::user()->no_hp }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Asosiasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="asosiasi" name="asosiasi" class="form-control @error('asosiasi') is invalid @enderror" placeholder="Masukkan asosiasi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Anggota Asosiasi</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="no_anggota" name="no_anggota" class="form-control @error('no_anggota') is invalid @enderror" placeholder="Masukkan Nomor Anggota Asosiasi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="nama-proyek" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Proyek</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="nama_proyek" name="nama_proyek" class="form-control @error('nama_proyek') is invalid @enderror" placeholder="Masukkan Nama Proyek">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Proyek</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="alamat_proyek" name="alamat_proyek" class="form-control @error('alamat_proyek') is invalid @enderror" placeholder="Masukkan Alamat Proyek">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="pemohon_satu" name="pemohon_satu" class="form-control @error('pemohon_satu') is invalid @enderror" placeholder="Masukkan Pemohon / Pemberi Kuasa 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP </label>
                                        <div class="col-sm-9">
                                            <input type="number" id="hp_satu" name="hp_satu" class="form-control @error('hp_satu') is invalid @enderror" placeholder="Masukkan Nomor HP Pemohon 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="pemohon_duan" name="pemohon_duan" class="form-control @error('pemohon_duan') is invalid @enderror" placeholder="Masukkan Pemohon / Pemberi Kuasa 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="hp_dua" name="hp_dua" class="form-control @error('hp_dua') is invalid @enderror" placeholder="Masukkan Nomor HP Pemohon 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Luas Total</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="total" name="total" class="form-control @error('total') is invalid @enderror" placeholder="Masukkan Luas Total">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="type" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <strong> * Kavling Efektif</strong>
                                    <div class="row mt-3" name="addMoreInputFields[0][subject]">
                                        <div class="col-xl-3">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control default-select" wire:model="kategori.0" >
                                                        <option>1 - Ruko</option>
                                                        <option>2 - Perumahan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label>Type Bangunan</label>
                                                    <input type="text" wire:model="type.0"class="form-control" placeholder="Masukkan Type Bangunan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label>Jumlah unit</label>
                                                    <input type="number" iwire:model="jumlah.0" class="form-control" placeholder="Masukkan Jumlah Unit">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label></label>
                                                    <button type="button" class="btn light btn-primary" wire:click.prevent="add({{$i}})">
                                                        <i class="fa fa-plus color-primary"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @foreach($inputs as $key => $value)
                                            <div class=" add-input">
                                                <div class="row mt-3" name="addMoreInputFields[0][subject]">
                                                    <div class="col-xl-3">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <label>Kategori</label>
                                                                <select class="form-control default-select" id="kategori" name="kategori">
                                                                    <option>1 - Ruko</option>
                                                                    <option>2 - Perumahan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <label>Type Bangunan</label>
                                                                <input type="text" id="tipe" name="tipe" class="form-control" placeholder="Masukkan Type Bangunan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <label>Jumlah unit</label>
                                                                <input type="number" id="juml_unit" name="juml_unit" class="form-control" placeholder="Masukkan Jumlah Unit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <label></label>
                                                                <button type="button" class="btn light btn-danger" wire:click.prevent="remove({{$key}})">
                                                                    <i class="fa fa-plus color-danger"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    <strong>* Prasarana Sarana & Utilitas</strong>
                                    <div class="form-group row mt-3">
                                        <label class="col-sm-3 col-form-label">Jalan & Saluran</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="jln_saluran" name="jln_saluran" class="form-control" placeholder="Masukkan Jalan & Saluran">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Taman</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="taman" name="taman" class="form-control" placeholder="Masukkan Luas Taman">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RTH</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="rth" name="rth" class="form-control" placeholder="Masukkan Luas RTH">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sarana Peribadatan</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="ibadah" name="ibadah" class="form-control" placeholder="Masukkan Sarana Peribadatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sarana Olahraga</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="olahraga" name="olahraga" class="form-control" placeholder="Masukkan Sarana Olahraga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sarana Kesehatan</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="kesehatan" name="kesehatan" class="form-control" placeholder="Masukkan Sarana Kesehatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Lain-Lain</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="lain" name="lain" class="form-control" placeholder="Masukkan Lain-lain">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="upload-berkas" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Persyaratan</th>
                                                    <th>Unggah</th>
                                                    <th>Lihat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp

                                                @foreach ($berkas as $brks)
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <td>{{ $brks->nama_berkas }}</td>
                                                    <td class="input-group mt-4">
                                                        <input type="file" class="custom-file-input">
                                                        <label class="custom-file-label">Pilih file</label>
                                                    </td>
                                                    <td >
                                                        <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1">
                                                            <i class="fa fa-search"></i>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
Content body end
***********************************-->

@endsection

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

</div>
