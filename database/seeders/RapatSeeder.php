<?php

namespace Database\Seeders;

use App\Models\Rapat;
use Illuminate\Database\Seeder;

class RapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rapat::create([
            'rapat_id' => '5',
            'agenda' => 'Perumahan Maospati Regancy',
            'jadwal' => '2023-06-12  14:00:00',
            ]);
        // Rapat::create([
        //     'rapat_id' => '14',
        //     'agenda' => 'Kavling Siap Bangun PT.Abadi Sejahtera',
        //     'jadwal' => '2023-06-13  08:00:00',
        //     ]);
    }
}
