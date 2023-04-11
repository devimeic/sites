<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Riwayat Pengajuan</h4>
            </div>

            <div class="input-group search-area m-3">
                <div class="input-group-append">
                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                </div>
                <input type="text" wire:model="search" class="form-control" placeholder="Search here...">
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
                                $no = ($pengajuan->currentpage() - 1) * $pengajuan->perpage() + 1;
                            @endphp

                        @foreach ($pengajuan as $key )

                            <tr>
                                <td><strong>{{ $no++ }}</strong></td>
                                <td>{{ date('Y', strtotime($key->tanggal)) }}</td>
                                <td>
                                    @if($key->tanggal)
                                        {{ \Carbon\Carbon::parse($key->tanggal)->locale('id')->isoFormat('D MMMM Y') }}
                                    @endif
                                </td>
                                <td>{{ $key->nama_pro }}</td>
                                <td>
                                    @if ($key->status_pengajuan == 'Verifikasi Berkas')
                                        <span class="badge light badge-info">{{ $key->status_pengajuan }}</span></td>
                                    @elseif ($key->status_pengajuan == 'Revisi Berkas')
                                        <span class="badge badge-info">{{ $key->status_pengajuan }}</span></td>
                                    @elseif ($key->status_pengajuan == 'Verifikasi Lapangan')
                                        <span class="badge light badge-secondary">{{ $key->status_pengajuan }}</span></td>
                                    @elseif ($key->status_pengajuan == 'Revisi Lapangan')
                                        <span class="badge badge-secondary">{{ $key->status_pengajuan }}</span></td>
                                    @elseif ($key->status_pengajuan == 'Rekomendasi')
                                        <span class="badge badge-primary">{{ $key->status_pengajuan }}</span></td>
                                    @elseif ($key->status_pengajuan == 'Dikembalikan')
                                        <span class="badge badge-danger">{{ $key->status_pengajuan }}</span></td>
                                    @else
                                        <span class="badge badge-success">{{ $key->status_pengajuan }}</span></td>
                                    @endif</td>
                                </td>
                                <td>
                                    @if ($key->status_pengajuan == 'Revisi Berkas')
                                    <a href="{{ route('show-revisi', $key->id) }}" class="btn btn-info shadow btn-xs sharp mr-1" data-toggle="tooltip"
                                        data-placement="top" title="Revisi Berkas"><i
                                          class="fa fa-eye color-muted"></i> </a>
                                    @else
                                    <a href="{{ route('show-pemohon', $key->id) }}" class="btn btn-info shadow btn-xs sharp mr-1" data-toggle="tooltip"
                                        data-placement="top" title="Lihat Rincian Pengajuan"><i
                                          class="fa fa-eye color-muted"></i> </a>
                                    @endif

                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <ul class="pagination pagination-gutter pagination-primary no-bg">
                    {{ $pengajuan->links() }}
                </ul>
            </div>
        </div>
    </div>
</div>
