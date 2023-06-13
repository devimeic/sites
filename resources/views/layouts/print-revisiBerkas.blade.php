<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Siteplan</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="/disk/images/logo-magetan.png">
        <link href="/disk/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="/disk/css/cetak.css" rel="stylesheet">

</head>
<body>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Laporan Revisi Berkas</h4>
        </div>
        <div class="card-body mx-3">
            <div class="row text-black">
                <div class="col-3"><p>Developer</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p> {{ $cc->dev }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Nama Developer</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->nama_dev }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Alamat Developer</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p></p>{{ $cc->alamat_dev }}</div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Nomor Telepon</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p></p>{{ $cc->no_hp }}</div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Asosiasi</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->asosiasi }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Nomor Anggota Asosiasi</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->no_anggota }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Nama Proyek</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->nama_pro }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Alamat Proyek</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p></p>{{ $cc->alamat_pro }}</div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Pemohon / Pemberi Kuasa 1</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->pemohon1 }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Nomor HP Pemohon / Pemberi Kuasa 1</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->tel_pemohon1 }}</p></div>
            </div>

            <div class="row text-black">
                <div class="col-3"><p>Pemohon / Pemberi Kuasa 2</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->pemohon2 }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Nomor HP Pemohon / Pemberi Kuasa 2</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p> {{ $cc->tel_pemohon2 }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Luas Total</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $cc->total }}</p></div>
            </div>
            <strong>* Kavling Efektif</strong>

            @foreach ($tipe as $item)

            <div class="row text-black">
                <div class="col-3"><p>Kategori</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p> {{ $item->kategori }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Tipe Bangunan</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $item->tipe }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Jumlah Unit</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $item->juml_unit }}</p></div>
            </div>
            @endforeach
            <strong>* Prasarana Sarana & Utilitas</strong>
            <div class="row text-black">
                <div class="col-3"><p>Taman</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $taman->luas }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>RTH</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $rth->luas }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Sarana Peribadatan</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $ibadah->luas }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Sarana Olahraga</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $olahraga->luas }}</p></div>
            </div>
            <div class="row text-black">
                <div class="col-3"><p>Sarana Kesehatan</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $kesehatan->luas }}</p></div>
            </div>
            @foreach ($lain as $item)

            <div class="row text-black">
                <div class="col-3"><p>Lain-lain</p></div>
                <div class="col-1"><p>:</p></div>
                <div class="col-7"><p>{{ $item->keterangan }}</p></div>
                <div class="col-7"><p>{{ $item->luas }}</p></div>
            </div>
            @endforeach

            <div class="table-responsive " >
                <table class="table table-bordered text-black">
                    <thead>
                        <tr>
                            <th class="width80">No</th>
                            <th>Berkas</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($tabel as $item)
                        <tr>
                            <td>
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $item->berkas->nama_berkas }}

                            </td>
                            <td>
                                {{ $item->status_berkas }}

                            </td>
                        </tr>

                        @endforeach
                        {{-- @foreach ($tabel as $item => $value)

                        <tr>
                            <td><strong>{{ $no++ }}</strong></td>
                            <td>{{ $value->nama_berkas }}</td>
                            <td>Dr. Jackson</td>
                        </tr>
                        @endforeach --}}

                    </tbody>
                </table>
            </div>
            <button class="print-button" onclick="window.print()">Cetak</button>
        </div>
    </div>
</body>
</html>
