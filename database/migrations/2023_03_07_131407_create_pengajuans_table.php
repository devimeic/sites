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
            $table->string('dev',10);
            $table->string('nama_dev');
            $table->string('alamat_dev');
            $table->string('no_hp',15);
            $table->string('asosiasi');
            $table->string('no_anggota');
            $table->string('nama_pro')->nullable();
            $table->string('alamat_pro')->nullable();
            $table->string('pemohon1',35)->nullable();
            $table->string('tel_pemohon1',15)->nullable();
            $table->string('pemohon2',35)->nullable();
            $table->string('tel_pemohon2',15)->nullable();
            $table->integer('total')->nullable();
            $table->date('tanggal')->nullable();
            $table->enum('status_pengajuan', ['Draft','Verifikasi Berkas','Revisi Berkas','Verifikasi Lapangan','Revisi Lapangan','Rekomendasi','Dikembalikan','Selesai'])->nullable();
            $table->foreign('pengaju')->references('id')->on('users')->onUpdate('cascade');
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
