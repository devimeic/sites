<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BerkasSeeder::class);
        // $this->call(PengajuanSeeder::class);
        // $this->call(TipeSeeder::class);
        \App\Models\User::factory(10)->create();
        // $this->call(PengajuanSeeder::class);
        // $this->call(DataSeeder::class);
        // $this->call(FileSeeder::class);
        // $this->call(PsuSeeder::class);
        // $this->call(RekomendasiSeeder::class);
        // $this->call(RapatSeeder::class);

    }
}
