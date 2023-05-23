<?php

namespace Database\Seeders;

use App\Models\Psu;
use App\Models\Tipe;
use App\Models\User;
use App\Models\Pengajuan;
use App\Models\Rapat;
use App\Models\Rekomendasi;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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


             Pengajuan::create([
                'pengaju' => User::where('name','Aulia Wijaya')->pluck('id')->first(),
                'dev' => 'Developer',
                'nama_dev' => 'an. Intan Aini',
                'alamat_dev' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
                'no_hp' => '089432566786',
                'asosiasi' => 'REI',
                'no_anggota' => '106011700004',
                'nama_pro' => 'Perumahan Bakti Husna',
                'alamat_pro' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
                'pemohon1' => 'Dyah Ayu',
                'tel_pemohon1' => '085678908999',
                'pemohon2' => 'Siska Koll',
                'tel_pemohon2' => '085665787998',
                'total' => '315',
                'tanggal' => '2023-04-12',
                'status_pengajuan' => 'Verifikasi Berkas',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Rizki Maulana')->pluck('id')->first(),
                'dev' => 'Developer',
                'nama_dev' => 'an. Reza Husada',
                'alamat_dev' => 'Jl.H Abd Wahab Siamin  RT.12/RW.03 Kel.Bendo Kec.Bendo',
                'no_hp' => '81209890076',
                'asosiasi' => 'REI',
                'no_anggota' => '106011700005',
                'nama_pro' => 'Griya Asri',
                'alamat_pro' => 'Jl.H Abd Wahab Siamin  RT.12/RW.03 Kel.Bendo Kec.Bendo',
                'pemohon1' => 'Andi Rejo',
                'tel_pemohon1' => '081221453676',
                'pemohon2' => 'Akbar Subeki',
                'tel_pemohon2' => '081445345000',
                'total' => '124',
                'tanggal' => '2023-04-13',
                'status_pengajuan' => 'Verifikasi Berkas',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Putri Dewi')->pluck('id')->first(),
                'dev' => 'Developer',
                'nama_dev' => 'an. Agung Herlambang',
                'alamat_dev' => 'Jl.P Jayakarta 141 Cendrawasih Kel.Maospati Kab.Magetan',
                'no_hp' => '087654213888',
                'asosiasi' => 'REI',
                'no_anggota' => '106011700006',
                'nama_pro' => 'Griya Mulia',
                'alamat_pro' => 'Jl.P Jayakarta 141 Cendrawasih Kel.Maospati Kab.Magetan',
                'pemohon1' => 'Riska Maimun',
                'tel_pemohon1' => '085661231770',
                'pemohon2' => 'Putri Indah',
                'tel_pemohon2' => '085121988211',
                'total' => '287',
                'tanggal' => '2023-03-15',
                'status_pengajuan' => 'Verifikasi Berkas',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Joko Prasetyo')->pluck('id')->first(),
                'dev' => 'PT',
                'nama_dev' => 'PT. Wijaya Kusuma',
                'alamat_dev' => 'Jl Imam Bonjol 206 Kel. Kawedanan Kab.Magetan',
                'no_hp' => '081321110900',
                'asosiasi' => 'APERNAS',
                'no_anggota' => '106011700007',
                'nama_pro' => 'Perumahan Kilang Permai',
                'alamat_pro' => 'Jl Imam Bonjol 206 Kel. Kawedanan Kab.Magetan',
                'pemohon1' => 'Anna Isma',
                'tel_pemohon1' => '084169520919',
                'pemohon2' => 'Yudi Putra',
                'tel_pemohon2' => '083533907282',
                'total' => '211',
                'tanggal' => '2023-02-16',
                'status_pengajuan' => 'Verifikasi Berkas',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Maya Sari')->pluck('id')->first(),
                'dev' => 'PT',
                'nama_dev' => 'PT. Crisanda',
                'alamat_dev' => 'Kawasan Berikat Nusantara Kav II Bl A-6/3, Dki Jakarta Dki Jakarta, Jakarta, 14150',
                'no_hp' => '85766890889',
                'asosiasi' => 'Himperra',
                'no_anggota' => '106011700008',
                'nama_pro' => 'Griya Tegal Aroma',
                'alamat_pro' => 'Kawasan Berikat Nusantara Kav II Bl A-6/3, Dki Jakarta Dki Jakarta, Jakarta, 14150',
                'pemohon1' => 'Iris Qisa',
                'tel_pemohon1' => '084160682304',
                'pemohon2' => 'Putra Wijaya',
                'tel_pemohon2' => '083262007389',
                'total' => '155',
                'tanggal' => '2023-03-20',
                'status_pengajuan' => 'Verifikasi Lapangan',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Ahmad Syahputra')->pluck('id')->first(),
                'dev' => 'PT',
                'nama_dev' => 'PT. Reli Propertindo',
                'alamat_dev' => 'Jl.Cempaka Wangi 12 Kel. Lembeyan Kab.Magetan',
                'no_hp' => '81445765889',
                'asosiasi' => 'Himperra',
                'no_anggota' => '106011700009',
                'nama_pro' => 'Perumahan Sari Permai',
                'alamat_pro' => 'Jl.Cempaka Wangi 12 Kel. Lembeyan Kab.Magetan',
                'pemohon1' => 'Tirasa Irha',
                'tel_pemohon1' => '084151843690',
                'pemohon2' => 'Wira Bumi',
                'tel_pemohon2' => '082990107495',
                'total' => '231',
                'tanggal' => '2023-04-21',
                'status_pengajuan' => 'Verifikasi Lapangan',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Indra Wijaya')->pluck('id')->first(),
                'dev' => 'PT',
                'nama_dev' => 'PT.Perdana',
                'alamat_dev' => 'Jl.Kediri III 3  Kel. Magetan Kab.Magetan',
                'no_hp' => '085342655887',
                'asosiasi' => 'Himperra',
                'no_anggota' => '106011700010',
                'nama_pro' => 'Griya Barokah',
                'alamat_pro' => 'Jl.Kediri III 3  Kel. Magetan Kab.Magetan',
                'pemohon1' => 'Amron Surwa',
                'tel_pemohon1' => '084143005075',
                'pemohon2' => 'Ahmad Dahlan',
                'tel_pemohon2' => '082718207602',
                'total' => '45',
                'tanggal' => '2023-04-22',
                'status_pengajuan' => 'Verifikasi Lapangan',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Hana Ayu')->pluck('id')->first(),
                'dev' => 'PT',
                'nama_dev' => 'PT.Abadi Sejahtera',
                'alamat_dev' => 'JL. WR Supratman No.132 Ds. Bayem Taman Kel. Kartoharjo Kab.Magetan',
                'no_hp' => '085404983381',
                'asosiasi' => 'Pengembang Indonesia',
                'no_anggota' => '106011700011',
                'nama_pro' => 'Kaveling Siap Bangun',
                'alamat_pro' => 'JL. WR Supratman No.132 Ds. Bayem Taman Kel. Kartoharjo Kab.Magetan',
                'pemohon1' => 'Eka Iman',
                'tel_pemohon1' => '084134166461',
                'pemohon2' => 'Puja Ahyu',
                'tel_pemohon2' => '082446307708',
                'total' => '76',
                'tanggal' => '2023-04-25',
                'status_pengajuan' => 'Rekomendasi',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Dian Purnama')->pluck('id')->first(),
                'dev' => 'PT',
                'nama_dev' => 'PT.Rindo',
                'alamat_dev' => 'Jl Bintaro Utama III No.12  Ds. Gulun Kel. Maospati Kab.Magetan',
                'no_hp' => '086179334377',
                'asosiasi' => 'Pengembang Indonesia',
                'no_anggota' => '106011700012',
                'nama_pro' => 'Perumahan Tawangmangu',
                'alamat_pro' => 'Jl Bintaro Utama III No.12  Ds. Gulun Kel. Maospati Kab.Magetan',
                'pemohon1' => 'Olga Amin',
                'tel_pemohon1' => '084125327846',
                'pemohon2' => 'Yuli Sinta',
                'tel_pemohon2' => '082174407815',
                'total' => '89',
                'tanggal' => '2023-05-03',
                'status_pengajuan' => 'Selesai ',
                 ]);

                Pengajuan::create([
                'pengaju' => User::where('name','Irfan Rizki')->pluck('id')->first(),
                'dev' => 'PT',
                'nama_dev' => 'PT. Permadani',
                'alamat_dev' => 'Jl Teuku Umar 165  Kel. Alastuwo Magetan, Jawa Timur',
                'no_hp' => '088158943123',
                'asosiasi' => 'REI',
                'no_anggota' => '106011700013',
                'nama_pro' => 'Griya Utami',
                'alamat_pro' => 'Jl Teuku Umar 165  Kel. Alastuwo Magetan, Jawa Timur',
                'pemohon1' => 'Vista Utami',
                'tel_pemohon1' => '084116489232',
                'pemohon2' => 'Lali Tista',
                'tel_pemohon2' => '081902507921',
                'total' => '115',
                'tanggal' => '2023-05-05',
                'status_pengajuan' => 'Dikembalikan',
                 ]);

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

                     Psu::create([
                        'pengajuan_id' => '1',
                        'jln_saluran' => '12',
                        'taman' => '11',
                        'rth' => '43',
                        'ibadah' => '76',
                        'olahraga' => '33',
                        'kesehatan' => '12',
                        'lain' => '21',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '2',
                        'jln_saluran' => '32',
                        'taman' => '32',
                        'rth' => '2',
                        'ibadah' => '21',
                        'olahraga' => '56',
                        'kesehatan' => '21',
                        'lain' => '32',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '3',
                        'jln_saluran' => '43',
                        'taman' => '33',
                        'rth' => '54',
                        'ibadah' => '32',
                        'olahraga' => '12',
                        'kesehatan' => '32',
                        'lain' => '33',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '4',
                        'jln_saluran' => '2',
                        'taman' => '56',
                        'rth' => '11',
                        'ibadah' => '33',
                        'olahraga' => '21',
                        'kesehatan' => '11',
                        'lain' => '56',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '5',
                        'jln_saluran' => '54',
                        'taman' => '22',
                        'rth' => '32',
                        'ibadah' => '56',
                        'olahraga' => '32',
                        'kesehatan' => '32',
                        'lain' => '12',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '6',
                        'jln_saluran' => '32',
                        'taman' => '65',
                        'rth' => '33',
                        'ibadah' => '12',
                        'olahraga' => '33',
                        'kesehatan' => '33',
                        'lain' => '11',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '7',
                        'jln_saluran' => '32',
                        'taman' => '13',
                        'rth' => '2',
                        'ibadah' => '32',
                        'olahraga' => '22',
                        'kesehatan' => '56',
                        'lain' => '32',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '8',
                        'jln_saluran' => '21',
                        'taman' => '32',
                        'rth' => '54',
                        'ibadah' => '43',
                        'olahraga' => '65',
                        'kesehatan' => '12',
                        'lain' => '33',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '9',
                        'jln_saluran' => '76',
                        'taman' => '87',
                        'rth' => '32',
                        'ibadah' => '21',
                        'olahraga' => '12',
                        'kesehatan' => '21',
                        'lain' => '32',
                         ]);

                        Psu::create([
                        'pengajuan_id' => '10',
                        'jln_saluran' => '21',
                        'taman' => '80',
                        'rth' => '21',
                        'ibadah' => '76',
                        'olahraga' => '32',
                        'kesehatan' => '33',
                        'lain' => '87',
                         ]);

                    Rekomendasi::create([
                    'pengajuan_id' => '9',
                    'nomor_rekomendasi' => '9091-9087-0098-3431',
                    'files' => 'public/berkas/pengajuan/surat-permohonan.pdf',
                    ]);

                    Rapat::create([
                    'rapat_id' => '8',
                    'agenda' => 'rapat 1',
                    'jadwal' => '2023-06-01  12:00:00',
                    ]);



    }
}
