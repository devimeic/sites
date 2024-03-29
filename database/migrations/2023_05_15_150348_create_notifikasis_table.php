<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_notifikasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()
                ->onUpdate('cascade');
            $table->string('keterangan');
            $table->string('status',15);
            $table->dateTime('jadwal')->nullable();
            $table->foreign('user_id')->references('id')->on('tb_user')->onUpdate('cascade');
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
        Schema::dropIfExists('tb_notifikasi');
    }
}
