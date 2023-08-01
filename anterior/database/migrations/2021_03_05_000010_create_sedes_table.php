<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->string('sede');
            $table->foreignId('ciudad_id')->references('id')->on('ciudades');
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('entidad_id')->references('id')->on('entidades');
            $table->string('direccion');
            $table->string('detalles');
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
        Schema::dropIfExists('sedes');
    }
}
