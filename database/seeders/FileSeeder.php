<?php

namespace Database\Seeders;

use App\Models\Berkas;
use App\Models\Upload;
use Illuminate\Database\Seeder;

class fileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'tolak',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'tolak',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);
             Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
            ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
            ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
            ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
                'status_berkas' => 'tolak',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
                'status_berkas' => 'tolak',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => '9',
                'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => '10',
                'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
                    'status_berkas' => 'tolak',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
                    'status_berkas' => 'tolak',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => '9',
                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => '10',
                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                        Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
                            'status_berkas' => 'tolak',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
                            'status_berkas' => 'tolak',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => '9',
                            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => '10',
                            'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                             Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
                                'status_berkas' => 'tolak',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
                                'status_berkas' => 'tolak',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => '9',
                                'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '1',
                                'berkas_id' => '10',
                                'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                 Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-permohonan.pdf',
                                    'status_berkas' => 'tolak',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/ippt.pdf',
                                    'status_berkas' => 'tolak',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/kepemilikan-lahan.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/akta-pt.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/pbb.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/ukp-upl.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/ktp.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => '9',
                                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => '10',
                                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-rekom.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/surat-kuasa.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/gambar-siteplan.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/makam.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/pengajuan/bebas-banjir.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);


    }
}
