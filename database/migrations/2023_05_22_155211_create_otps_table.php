<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_otp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()
            ->onUpdate('cascade');
            $table->string('no_hp',15)->nullable();
            $table->string('otp',4)->nullable();
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
        Schema::dropIfExists('tb_otp');
    }
}
