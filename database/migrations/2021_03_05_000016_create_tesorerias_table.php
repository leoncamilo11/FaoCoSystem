<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesoreriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tesorerias', function (Blueprint $table) {
            $table->id();
            $table->string('consecutivo');
            $table->date('fechaFactura');
            $table->string('noFactura');
            $table->foreignId('proveedor_id')->index();
            $table->foreignId('responsable_id')->references('id')->on('users');
            $table->string('proyecto_id')->references('id')->on('proyectos');
            $table->foreignId('tipoPago_id')->references('id')->on('tipo_pagos');
            $table->integer('valorFactura');
            $table->integer('valorIva');
            $table->integer('valorImpoconsumo');
            $table->string('detalles');
            $table->string('adjunto')->default('No aplica');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tesorerias');
    }
}
