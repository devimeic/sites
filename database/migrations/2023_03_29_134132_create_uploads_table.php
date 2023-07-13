<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_upload', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_id')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('berkas_id')->constrained()
                ->onUpdate('cascade');
            $table->string('lokasi_berkas');
            $table->enum('status_berkas', ['setuju', 'tolak', 'belum diverifikasi'])->nullable();
            $table->enum('status_lapangan', ['setuju', 'tolak', 'belum diverifikasi'])->nullable();
            $table->string('catatan')->nullable();
            $table->foreign('pengajuan_id')->references('id')->on('tb_pengajuan')->onUpdate('cascade');
            $table->foreign('berkas_id')->references('id')->on('tb_berkas')->onUpdate('cascade');
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
        Schema::dropIfExists('tb_upload');
    }
}
