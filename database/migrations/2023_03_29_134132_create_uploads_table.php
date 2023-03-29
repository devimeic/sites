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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_id')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('berkas_id')->constrained()
                ->onUpdate('cascade');
            $table->string('lokasi_berkas');
            $table->string('catatan')->nullable();
            $table->enum('status_berkas', ['setuju', 'tidak setuju'])->nullable();
            $table->enum('status_pengajuan', ['0','1','2','3','4','5','6'])->nullable();
            $table->enum('status_lapangan', ['setuju', 'tidak setuju'])->nullable();
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
        Schema::dropIfExists('uploads');
    }
}
