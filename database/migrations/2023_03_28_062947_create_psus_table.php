<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_id')->constrained()
                ->onUpdate('cascade');
            $table->integer('jln_saluran');
            $table->integer('taman');
            $table->integer('rth');
            $table->integer('ibadah');
            $table->integer('olahraga');
            $table->integer('kesehatan');
            $table->integer('lain');
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
        Schema::dropIfExists('psus');
    }
}
