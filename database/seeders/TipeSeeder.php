<?php

namespace Database\Seeders;

use App\Models\Tipe;
use App\Models\Pengajuan;
use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Bakti Husna')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'T.45',
            'juml_unit' => '5',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Bakti Husna')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.36',
            'juml_unit' => '6',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Bakti Husna')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok A',
            'juml_unit' => '4',
             ]);
            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Kita Bisa')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok A',
            'juml_unit' => '4',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Ranah Oma')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'T.45',
            'juml_unit' => '5',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Ranah Oma')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.36',
            'juml_unit' => '6',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Ranah Oma')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok A',
            'juml_unit' => '4',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Berbakti')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'T.45',
            'juml_unit' => '5',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Berbakti')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.36',
            'juml_unit' => '6',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Berbakti')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok A',
            'juml_unit' => '4',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Maospati Regancy')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'T.45',
            'juml_unit' => '5',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Maospati Regancy')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.36',
            'juml_unit' => '6',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Maospati Regancy')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok A',
            'juml_unit' => '4',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Suratmajan Regancy')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'T.45',
            'juml_unit' => '5',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Suratmajan Regancy')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.36',
            'juml_unit' => '6',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Suratmajan Regancy')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok A',
            'juml_unit' => '4',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Pondok Bambu')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'T.45',
            'juml_unit' => '5',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Pondok Bambu')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.36',
            'juml_unit' => '6',
                ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Pondok Bambu')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok A',
            'juml_unit' => '4',
                ]);


            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Griya Asri')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'Blok B',
            'juml_unit' => '8',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Griya Asri')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok C',
            'juml_unit' => '10',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Griya Mulia')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.66',
            'juml_unit' => '7',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Kilang Permai')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Usaha',
            'juml_unit' => '13',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Griya Tegal Aroma')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'Blok D',
            'juml_unit' => '9',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Sari Permai')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'T.45',
            'juml_unit' => '3',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Griya Barokah')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.66',
            'juml_unit' => '1',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Kaveling Siap Bangun')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok B',
            'juml_unit' => '12',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Tawangmangu')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok C',
            'juml_unit' => '1',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Tawangmangu')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.66',
            'juml_unit' => '2',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Perumahan Tawangmangu')->pluck('id')->first(),
            'kategori' => 'Perumahan',
            'tipe' => 'Blok D',
            'juml_unit' => '7',
             ]);

            Tipe::create([
            'pengajuan_id' => Pengajuan::where('nama_pro','Griya Utami')->pluck('id')->first(),
            'kategori' => 'Ruko',
            'tipe' => 'T.45',
            'juml_unit' => '6',
             ]);
    }
}
