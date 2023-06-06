<?php

namespace Database\Seeders;

use App\Models\Rekomendasi;
use Illuminate\Database\Seeder;

class RekomendasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rekomendasi::create([
            'pengajuan_id' => '7',
            'nomor_rekomendasi' => '9091-9087-0098-3431',
            'files' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            ]);
        Rekomendasi::create([
            'pengajuan_id' => '15',
            'nomor_rekomendasi' => '0012-2134-1112-2221',
            'files' => 'public/berkas/pengajuan/surat-permohonan.pdf',
            ]);
    }
}
