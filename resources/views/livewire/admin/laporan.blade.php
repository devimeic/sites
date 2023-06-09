<div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Pengajuan</h4>
            </div>

            <div class="input-group search-area m-3">
                <div class="input-group-append">
                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                </div>
                <input type="text" wire:model="search" class="form-control" placeholder="Cari Disini...">
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example3" class="table table-responsive-md text-black">
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
                        {{-- @if ($key->pengaju == Auth::user()->id) --}}

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
                                    @if ($key->status_pengajuan == 'Dikembalikan')

                                        <span class="badge badge-danger">{{ $key->status_pengajuan }}</span></td>
                                    @else
                                        <span class="badge badge-success">{{ $key->status_pengajuan }}</span></td>
                                    @endif</td>
                                </td>
                                <td>
                                    <a href="{{ route('rincian-admin', $key->id) }}" class="btn btn-info shadow btn-xs sharp mr-1" data-toggle="tooltip"
                                        data-placement="top" title="Lihat Rincian Pengajuan"><i
                                          class="fa fa-eye color-muted"></i> </a>

                                </td>

                            </tr>
                        {{-- @endif --}}

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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Keterangan</h4>
                </div>
                <div class="card-body">
                    <a>
                        <span class="badge badge-danger mt-3">Dikembalikan</span>
                        => Pengajuan di tolak</a><br>
                    <a>
                        <span class="badge badge-success mt-3">Selesai</span>
                        => Pengajuan selesai dan telah mendapatkan surat rekomendasi</a>
                </div>
            </div>
    </div>
</div>
