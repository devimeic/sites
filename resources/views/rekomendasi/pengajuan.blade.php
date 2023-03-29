@extends('layouts.main')

@section('isi')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pengajuan</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table id="example3" class="display min-w850">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Nama Proyek</th>
                            <th>Status </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>

                            </td>
                            <td>
                                 <a href="{{ route('surat-rekomendasi') }}" class="btn btn-info shadow btn-xs sharp mr-1" data-toggle="tooltip"
                                  data-placement="top" title="Lihat Rincian Pengajuan"><i
                                    class="fa fa-eye color-muted"></i> </a>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
