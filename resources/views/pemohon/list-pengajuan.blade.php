@extends('layouts.main')

@section('isi')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Ajukan Pengajuan</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $tittle }}</a></li>
    </ol>
</div>
<a href="{{ route('pengajuan-pemohon') }}">
    <button class="btn btn-rounded btn-primary mb-4" id="btn-create-post"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
    </span>Tambah Pengajuan</button>
</a>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $tittle }}</h4>
        </div>
        <div class="card-body">

            <div class="table">
                <table id="example3" class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Proyek</th>
                            <th>Status </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($pengajuan as $key )

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $key->nama_pro }}</td>
                            <td>
                                <span class="badge badge-warning">{{ $key->status_pengajuan }}</span>
                            </td>
                            <td>
                                <a href="{{ route('pengajuan-pemohon') }}" class="btn btn-info shadow btn-xs sharp mr-1" data-toggle="tooltip"
                                  data-placement="top" title="Lihat Rincian Pengajuan"><i
                                    class="fa fa-eye color-muted"></i> </a>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
