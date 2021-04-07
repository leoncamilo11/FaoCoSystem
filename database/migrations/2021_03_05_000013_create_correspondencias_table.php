<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrespondenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondencias', function (Blueprint $table) {
            $table->id();
            $table->string('consecutivo');
            $table->foreignId('recepcionistaRegistra_id')->references('id')->on('users');
            $table->string('numeroGuia');
            $table->string('remitenteE')->nullable();
            $table->foreignId('remitenteC_id')->references('id')->on('users')->nullable();
            $table->foreignId('remitenteP_id')->references('id')->on('proveedores')->nullable();
            $table->string('detalles');
            $table->foreignId('ciudadE_id')->references('id')->on('ciudades');
            $table->foreignId('ciudadR_id')->references('id')->on('ciudades');
            $table->foreignId('estado_id')->references('id')->on('estados');
            $table->foreignId('usuarioRecibe_id')->references('id')->on('users');
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
        Schema::dropIfExists('correspondencias');
    }
}
