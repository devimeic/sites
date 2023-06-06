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
            'pengaju' => User::where('name','Aulia Wijaya')->pluck('id')->first(),
            'dev' => 'Developer',
            'nama_dev' => 'an. Intan Aini',
            'alamat_dev' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'no_hp' => '089432566786',
            'asosiasi' => 'REI',
            'no_anggota' => '106011700004',
            'nama_pro' => 'Perumahan Kita Bisa',
            'alamat_pro' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'pemohon1' => 'Dyah Ayu',
            'tel_pemohon1' => '085678908999',
            'pemohon2' => 'Siska Koll',
            'tel_pemohon2' => '085665787998',
            'total' => '315',
            'tanggal' => '2023-04-12',
            'status_pengajuan' => 'Revisi Berkas',
            ]);

            Pengajuan::create([
            'pengaju' => User::where('name','Aulia Wijaya')->pluck('id')->first(),
            'dev' => 'Developer',
            'nama_dev' => 'an. Intan Aini',
            'alamat_dev' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'no_hp' => '089432566786',
            'asosiasi' => 'REI',
            'no_anggota' => '106011700004',
            'nama_pro' => 'Perumahan Ranah Oma',
            'alamat_pro' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'pemohon1' => 'Dyah Ayu',
            'tel_pemohon1' => '085678908999',
            'pemohon2' => 'Siska Koll',
            'tel_pemohon2' => '085665787998',
            'total' => '315',
            'tanggal' => '2023-04-12',
            'status_pengajuan' => 'Verifikasi Lapangan',
            ]);

            Pengajuan::create([
            'pengaju' => User::where('name','Aulia Wijaya')->pluck('id')->first(),
            'dev' => 'Developer',
            'nama_dev' => 'an. Intan Aini',
            'alamat_dev' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'no_hp' => '089432566786',
            'asosiasi' => 'REI',
            'no_anggota' => '106011700004',
            'nama_pro' => 'Perumahan Berbakti',
            'alamat_pro' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'pemohon1' => 'Dyah Ayu',
            'tel_pemohon1' => '085678908999',
            'pemohon2' => 'Siska Koll',
            'tel_pemohon2' => '085665787998',
            'total' => '315',
            'tanggal' => '2023-04-12',
            'status_pengajuan' => 'Revisi Lapangan',
            ]);

            Pengajuan::create([
            'pengaju' => User::where('name','Aulia Wijaya')->pluck('id')->first(),
            'dev' => 'Developer',
            'nama_dev' => 'an. Intan Aini',
            'alamat_dev' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'no_hp' => '089432566786',
            'asosiasi' => 'REI',
            'no_anggota' => '106011700004',
            'nama_pro' => 'Perumahan Maospati Regancy',
            'alamat_pro' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'pemohon1' => 'Dyah Ayu',
            'tel_pemohon1' => '085678908999',
            'pemohon2' => 'Siska Koll',
            'tel_pemohon2' => '085665787998',
            'total' => '315',
            'tanggal' => '2023-04-12',
            'status_pengajuan' => 'Rekomendasi',
            ]);
            Pengajuan::create([
            'pengaju' => User::where('name','Aulia Wijaya')->pluck('id')->first(),
            'dev' => 'Developer',
            'nama_dev' => 'an. Intan Aini',
            'alamat_dev' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'no_hp' => '089432566786',
            'asosiasi' => 'REI',
            'no_anggota' => '106011700004',
            'nama_pro' => 'Perumahan Suratmajan Regancy',
            'alamat_pro' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'pemohon1' => 'Dyah Ayu',
            'tel_pemohon1' => '085678908999',
            'pemohon2' => 'Siska Koll',
            'tel_pemohon2' => '085665787998',
            'total' => '315',
            'tanggal' => '2023-04-12',
            'status_pengajuan' => 'Dikembalikan',
            ]);

            Pengajuan::create([
            'pengaju' => User::where('name','Aulia Wijaya')->pluck('id')->first(),
            'dev' => 'Developer',
            'nama_dev' => 'an. Intan Aini',
            'alamat_dev' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'no_hp' => '089432566786',
            'asosiasi' => 'REI',
            'no_anggota' => '106011700004',
            'nama_pro' => 'Perumahan Pondok Bambu',
            'alamat_pro' => 'Jl Karunrung 5 RT.01/RW.02 Ds. Jonggrang Kec.Barat Kab.Magetan',
            'pemohon1' => 'Dyah Ayu',
            'tel_pemohon1' => '085678908999',
            'pemohon2' => 'Siska Koll',
            'tel_pemohon2' => '085665787998',
            'total' => '315',
            'tanggal' => '2023-04-12',
            'status_pengajuan' => 'Selesai',
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

    }
}
