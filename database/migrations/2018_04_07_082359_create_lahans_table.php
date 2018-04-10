<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pemiliklahan');
            $table->string('foto_lahan',100);
            $table->unsignedTinyInteger('id_statusvalidasi');
            //$table->unsignedBigInteger('id_pemiliklahan');
            $table->float('luaslahan',8,2);
            $table->unsignedSmallInteger('satuan_luas');
            $table->timestamps();
            Schema::disableForeignKeyConstraints();  
            $table->foreign('id_pemiliklahan')->references('id')->on('pemiliklahans');
            $table->foreign('id_statusvalidasi')->references('id')->on('status_validasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lahans');
    }
}
