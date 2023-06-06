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

         User::create([
            'name' => 'Aulia Wijaya',
            'username' => 'aulia',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Rizki Maulana',
            'username' => 'rizki',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Putri Dewi',
            'username' => 'putri',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Joko Prasetyo',
            'username' => 'joko',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Maya Sari',
            'username' => 'maya',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Ahmad Syahputra',
            'username' => 'ahmad',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Indra Wijaya',
            'username' => 'indra',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Hana Ayu',
            'username' => 'hana',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Dian Purnama',
            'username' => 'dian',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);

            User::create([
            'name' => 'Irfan Rizki',
            'username' => 'irfan',
            'password' => bcrypt('12345678'),
            'no_hp' => '089168790083',
            'role' => 'pemohon',
            'status_users' => 'aktif',
             ]);
    }
}
