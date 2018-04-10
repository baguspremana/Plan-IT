<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemiliklahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemiliklahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',100);
            $table->string('email')->unique();
            $table->bigInteger('ktp');
            $table->string('no_telp',20);
            $table->string('username',30);
            $table->string('password');
            $table->string('foto_profil',100);
            $table->string('foto_ktp');
            $table->dateTime('tanggal_lahir');
            $table->unsignedTinyInteger('jenis_kelamin');
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
        Schema::dropIfExists('pemiliklahans');
    }
}
