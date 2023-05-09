<?php

namespace Database\Seeders;

use App\Models\Pengajuan;
use App\Models\Upload;
use App\Models\User;
use Illuminate\Database\Seeder;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


        Pengajuan::create([
            'pengaju'=> User::where('name','PT Husana')->pluck('id')->first(),
            'dev' => 'Developer',
            'nama_dev' => 'maospati regancy',
            'alamat_dev' => 'maospati',
            'no_hp' => '089168790083',
            'asosiasi' => 'aa2b309',
            'no_anggota' => '100221',
        ]);




        Upload::create([
            'berkas_id'=> '1',
            'pengajuan_id'=> Pengajuan::where('nama_dev','maospati regancy')->pluck('id')->first(),
            'lokasi_berkas'=> 'public/berkas/maospati_regancy/per1.pdf'

        ]);
        //
    }
}
