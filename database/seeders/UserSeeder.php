<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('12345678'),
            'no_hp' => '087566879008',
            'role' => 'admin',
            'status_users' => 'aktif',
        ]);
        User::create([
            'name' => 'PT Husana',
            'username' => 'pemohon',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
        ]);
        User::create([
            'name' => 'Rono',
            'username' => 'berkas',
            'password' => bcrypt('12345678'),
            'no_hp' => '085690010009',
            'role' => 'verifikator berkas',
            'status_users' => 'aktif',
        ]);
        User::create([
            'name' => 'Dani',
            'username' => 'lapangan',
            'password' => bcrypt('12345678'),
            'no_hp' => '081290807777',
            'role' => 'verifikator lapangan',
            'status_users' => 'aktif',
        ]);
        User::create([
            'name' => 'Bandi',
            'username' => 'rekom',
            'password' => bcrypt('12345678'),
            'no_hp' => '081577219000',
            'role' => 'pemberi rekomendasi',
            'status_users' => 'aktif',
        ]);
    }
}
