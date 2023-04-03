<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengaju')->constrained()
                ->onUpdate('cascade');
            $table->string('dev');
            $table->string('nama_dev');
            $table->string('alamat_dev');
            $table->string('no_hp');
            $table->string('asosiasi');
            $table->string('no_anggota');
            $table->string('nama_pro')->nullable();
            $table->string('alamat_pro')->nullable();
            $table->string('pemohon1')->nullable();
            $table->string('tel_pemohon1')->nullable();
            $table->string('pemohon2')->nullable();
            $table->string('tel_pemohon2')->nullable();
            $table->string('total')->nullable();
            $table->string('slug')->nullable();
            $table->date('tanggal')->nullable();
            $table->enum('status_pengajuan', ['Draft','Verifikasi Berkas','Revisi Berkas','Verifikasi Lapangan','Revisi Lapangan','Rekomendasi','Dikembalikan','Selesai'])->nullable();
            $table->enum('status_berkas', ['setuju', 'tolak'])->nullable();
            $table->enum('status_lapangan', ['setuju', 'tolak'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuans');
    }
}
