<?php

/**
 |----------------------------------------------------------------------------
 |Migración de tabla Universidades
 |----------------------------------------------------------------------------
 |Enesta parte encontraremos todo lo relacionado sobre la tabla que almacenará
 |los datos basicos de las universidades registrados
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     
    |-------------------------------------------------------------------------
    |Tabla Universidades
    |-------------------------------------------------------------------------
    |Acontinuación encontramos los campos que tendra la tabla 
    |que migraremos a nuestra base de datos 
    */
    public function up()
    {
        Schema::create('universidads', function (Blueprint $table) {

            $table->id();

            $table->string('nombre-universidad');
            $table->string('nombre-titular');
            $table->string('nit');
            $table->string('correo');
            $table->string('telefono');
            $table->string('sede-principal');
            $table->string('link-universidad');
            $table->string('Logo');
            $table->string('quienes-somos');

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
        Schema::dropIfExists('universidads');
    }
}
