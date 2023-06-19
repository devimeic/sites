<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->string('username',20)->unique();
            $table->string('password',65);
            $table->string('no_hp',15)->nullable();
            $table->enum('role', ['admin', 'pemohon', 'verifikator berkas', 'verifikator lapangan', 'pemberi rekomendasi'])->default('pemohon');
            $table->enum('status_users', ['aktif', 'tidak aktif'])->default('tidak aktif');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
