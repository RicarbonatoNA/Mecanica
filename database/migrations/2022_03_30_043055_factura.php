<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')->references('id')->on('servicio');
            $table->unsignedBigInteger('trabajo_rea_id');
            $table->foreign('trabajo_rea_id')->references('id')->on('trabajo_realizado');
            $table->unsignedBigInteger('unidad_id');
            $table->foreign('unidad_id')->references('id')->on('unidad');
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
};
