<?php

namespace Database\Seeders;

use App\Models\Berkas;
use Illuminate\Database\Seeder;

class BerkasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Surat permohonan pengesahan Site Plan kepada Bupati Magetan Cq.Kepala Dinas Perumahan dan Kawasan Permukiman Kab.Magetan*',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Fotokopi IPR/ IL/ IPPT *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta jual beli dan pelepasan hak), dilengkapi dengan fotokopi peta bidang tanah atau gambar hasil ukur ulang dari kantor pertanahan*',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Fotokopi : Akta Pendirian PT (berbadan Hukum) bergerak di bidang perumahan SK Menteri Hukum dan HAM beserta angggota asosiasi perumahan',
            'wajib' => 'tidak'
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Fotokopi PBB tahun berjalan *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Fotokopi KTP *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Fotokopi KTP dan SKA Perencana (yang menggambar) *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Surat Rekomendasi dari Bidang SDA Dinas PUPR *
             a. Jika lahan bangunan berbatasan dengan saluran irigasi
             b. Jika menutup saluran irigasi',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Surat Rekomendasi dari Dinas PU Sumber Daya Air Provinsi *
            a. Jika lahan bangunan berbatasan dengan sungai
            b. Jika membuat jembatan ',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi KTP pemegang Surat Kuasa *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan rangkap 2 (Dua) beserta file autocad *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa / Lurah terkait penyedoa TPU *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Surat keterangan bebas banjir dari dinas terkait (bila diperlukan) *',
        ]);
        Berkas::create([
            // 'id' => 0,
            'nama_berkas' => 'Surat Keterangan lain bila diperlukan',
            'wajib' => 'tidak'
        ]);
    }
}
