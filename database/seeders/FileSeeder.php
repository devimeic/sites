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
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/surat-permohonan.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/ippt.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '1',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_bakti_husna/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/ukl-upl.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/ktp.png',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/ktp.png',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '2',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kita_bisa/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '3',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_ranah_oma/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'tolak',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'tolak',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '4',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_berbakti/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '5',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_maospati_regancy/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '6',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_suratmajan_regancy/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '7',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_pondok_bambu/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/griya_asri/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/griya_asri/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '8',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_asri/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/griya_mulia/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/griya_mulia/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '9',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_mulia/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/surat-permohonan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/ippt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);

            Upload::create([
            'pengajuan_id' => '10',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/perumahan_kilang_permai/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
             ]);
             Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/surat-permohonan.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/ippt.pdf',
            'status_berkas' => 'tolak',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/kepemilikan-lahan.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
            ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/akta-pt.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
            ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/pbb.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
            ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/ukl-upl.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/ktp.png',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => '9',
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => '10',
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/surat-rekom.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/surat-kuasa.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/makam.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
            'pengajuan_id' => '11',
            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
            'lokasi_berkas' => 'public/berkas/griya_tegal_aroma/bebas-banjir.pdf',
            'status_berkas' => 'setuju',
            'status_lapangan' => 'setuju',
            'catatan' => 'a',
                ]);

            Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/surat-permohonan.pdf',
                'status_berkas' => 'tolak',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/ippt.pdf',
                'status_berkas' => 'tolak',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/kepemilikan-lahan.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/akta-pt.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/pbb.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/ukl-upl.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/ktp.png',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/ktp.png',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => '9',
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/surat-rekom.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => '10',
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/surat-rekom.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/surat-kuasa.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/makam.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/bebas-banjir.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                'pengajuan_id' => '12',
                'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                'lokasi_berkas' => 'public/berkas/perumahan_sari_permai/bebas-banjir.pdf',
                'status_berkas' => 'setuju',
                'status_lapangan' => 'setuju',
                'catatan' => 'a',
                    ]);

                Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/surat-permohonan.pdf',
                    'status_berkas' => 'tolak',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/ippt.pdf',
                    'status_berkas' => 'tolak',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/kepemilikan-lahan.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/akta-pt.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/pbb.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/ukl-upl.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/ktp.png',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/ktp.png',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => '9',
                    'lokasi_berkas' => 'public/berkas/griya_barokah/surat-rekom.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => '10',
                    'lokasi_berkas' => 'public/berkas/griya_barokah/surat-rekom.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/surat-kuasa.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/makam.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/bebas-banjir.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                    Upload::create([
                    'pengajuan_id' => '13',
                    'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                    'lokasi_berkas' => 'public/berkas/griya_barokah/bebas-banjir.pdf',
                    'status_berkas' => 'setuju',
                    'status_lapangan' => 'setuju',
                    'catatan' => 'a',
                        ]);

                        Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/surat-permohonan.pdf',
                            'status_berkas' => 'tolak',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/ippt.pdf',
                            'status_berkas' => 'tolak',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/kepemilikan-lahan.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/akta-pt.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/pbb.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/ukl-upl.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/ktp.png',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/ktp.png',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => '9',
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/surat-rekom.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => '10',
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/surat-rekom.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/surat-kuasa.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/makam.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/bebas-banjir.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                            Upload::create([
                            'pengajuan_id' => '14',
                            'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                            'lokasi_berkas' => 'public/berkas/kaveling_siap_bangun/bebas-banjir.pdf',
                            'status_berkas' => 'setuju',
                            'status_lapangan' => 'setuju',
                            'catatan' => 'a',
                             ]);

                             Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/surat-permohonan.pdf',
                                'status_berkas' => 'tolak',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/ippt.pdf',
                                'status_berkas' => 'tolak',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/kepemilikan-lahan.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/akta-pt.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/pbb.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/ukl-upl.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/ktp.png',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/ktp.png',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => '9',
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/surat-rekom.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '1',
                                'berkas_id' => '10',
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/surat-rekom.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/surat-kuasa.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/makam.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/bebas-banjir.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                Upload::create([
                                'pengajuan_id' => '15',
                                'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                                'lokasi_berkas' => 'public/berkas/perumahan_tawangmangu/bebas-banjir.pdf',
                                'status_berkas' => 'setuju',
                                'status_lapangan' => 'setuju',
                                'catatan' => 'a',
                                 ]);

                                 Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/surat-permohonan.pdf',
                                    'status_berkas' => 'tolak',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi IPR/ IL/ IPPT *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/ippt.pdf',
                                    'status_berkas' => 'tolak',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/kepemilikan-lahan.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/akta-pt.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi PBB tahun berjalan *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/pbb.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/ukl-upl.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/ktp.png',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Fotokopi KTP dan SKA Perencana (yang menggambar) *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/ktp.png',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => '9',
                                    'lokasi_berkas' => 'public/berkas/griya_utami/surat-rekom.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => '10',
                                    'lokasi_berkas' => 'public/berkas/griya_utami/surat-rekom.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/surat-kuasa.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/SITEPLAN WARU RESMI TANDA TANGAN PERKIM.dwg',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/makam.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/bebas-banjir.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);

                                    Upload::create([
                                    'pengajuan_id' => '16',
                                    'berkas_id' => Berkas::where('nama_berkas','Surat Keterangan lain bila diperlukan')->pluck('id')->first(),
                                    'lokasi_berkas' => 'public/berkas/griya_utami/bebas-banjir.pdf',
                                    'status_berkas' => 'setuju',
                                    'status_lapangan' => 'setuju',
                                    'catatan' => 'a',
                                     ]);


    }
}
