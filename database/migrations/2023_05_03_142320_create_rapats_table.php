<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rapat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rapat_id')->constrained()
                ->onUpdate('cascade');
            $table->string('agenda',40);
            $table->dateTime('jadwal')->nullable();
            $table->foreign('rapat_id')->references('id')->on('tb_pengajuan')->onUpdate('cascade');
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
        Schema::dropIfExists('tb_rapat');
    }
}
