@extends('layouts.main')

@section('isi')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Riwayat Pengajuan</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table id="example3" class="table table-responsive-md">
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
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($pengajuan as $ajuan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ date('Y', strtotime($ajuan->tanggal)) }}</td>
                            <td>
                                @if($ajuan->tanggal)
                                    {{ \Carbon\Carbon::parse($ajuan->tanggal)->locale('id')->isoFormat('D MMMM Y') }}
                                @endif
                            </td>
                            <td>{{ $ajuan->nama_pro }}</td>
                            <td>
                                @if ($ajuan->status_pengajuan == 'Verifikasi Berkas')
                                    <span class="badge light badge-info">{{ $ajuan->status_pengajuan }}</span></td>
                                @elseif ($ajuan->status_pengajuan == 'Revisi Berkas')
                                    <span class="badge badge-info">{{ $ajuan->status_pengajuan }}</span></td>
                                @elseif ($ajuan->status_pengajuan == 'Verifikasi Lapangan')
                                    <span class="badge light badge-secondary">{{ $ajuan->status_pengajuan }}</span></td>
                                @elseif ($ajuan->status_pengajuan == 'Revisi Lapangan')
                                    <span class="badge badge-secondary">{{ $ajuan->status_pengajuan }}</span></td>
                                @elseif ($ajuan->status_pengajuan == 'Rekomendasi')
                                    <span class="badge badge-primary">{{ $ajuan->status_pengajuan }}</span></td>
                                @elseif ($ajuan->status_pengajuan == 'Dikembalikan')
                                    <span class="badge badge-danger">{{ $ajuan->status_pengajuan }}</span></td>
                                @else
                                    <span class="badge badge-success">{{ $ajuan->status_pengajuan }}</span></td>
                                @endif</td>
                            </td>
                            <td>
                                <a href="#" class="btn btn-info shadow btn-xs sharp mr-1" data-toggle="tooltip"
                                  data-placement="top" title="Lihat Rincian Pengajuan"><i
                                    class="fa fa-eye color-muted"></i> </a>
                            </td>

                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
