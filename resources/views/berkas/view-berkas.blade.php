@extends('layouts.main')

@section('isi')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nama Berkas</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Berkas Persyaratan</th>
                            <th>Lihat</th>
                            <th>Sesuai/Tidak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Kolor Tea Shirt For Man</td>
                            <td>
                                <a href="#" class="mr-4" data-toggle="tooltip"
                                  data-placement="top" title="Lihat Berkas"><i
                                    class="fa fa-eye color-muted"></i> </a>
                            </td>
                            <td></td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /# card -->
@endsection