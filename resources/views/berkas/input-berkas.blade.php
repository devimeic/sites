@extends('layouts.main')

@section('isi')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nama Berkas</h4>
        </div>
        <div class="card-body">
            <a href="javascript:void(0)" class="btn btn-rounded btn-primary mb-4" id="btn-create-post"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
            </span>Tambah Berkas Persyaratan</a>

            <div class="table-responsive">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Berkas Persyaratan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Kolor Tea Shirt For Man</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /# card -->
@endsection