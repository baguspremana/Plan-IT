<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailtanamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detailtanamans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tanaman');
            $table->unsignedBigInteger('id_lahan');
            $table->foreign('id_tanaman')->references('id')->on('tanamans');
            $table->foreign('id_lahan')->references('id')->on('lahans');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
