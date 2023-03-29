@extends('layouts.main')

@section('isi')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Upload Surat Rekomendasi</h4>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label text-black">Nama Developer</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Developer">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label text-black">Nama Proyek</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Proyek">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label text-black">Nomor Surat Rekomendasi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Masukkan Nomor Surat Rekomendasi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label text-black">File Surat Rekomendasi & Berita Acara</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control">
                </div>
            </div>


            <div class="row my-5">
                <div class="col-lg-3"></div>
                <div class="col-lg-3">
                    <button type="button" class="btn btn-square btn-danger btn-lg">DITOLAK</button>
                </div>
                <div class="col-lg-3">
                    <button type="button" class="btn btn-square btn-primary btn-lg">DITERIMA</button>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</div>
@endsection
