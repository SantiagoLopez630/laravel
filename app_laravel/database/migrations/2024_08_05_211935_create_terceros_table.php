<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTercerosTable extends Migration
{
    public function up()
    {
        Schema::create('terceros', function (Blueprint $table) {
            $table->id('documentoT');
            $table->string('nombre1T', 50);
            $table->string('nombre2T', 50);
            $table->string('apellido1T', 50);
            $table->string('apellido2T', 50);
            $table->string('tipoDocumentoT', 50);
            $table->string('estadoCivilT', 50);
            $table->string('generoT', 50);
            $table->integer('telefonoT');
            $table->date('fechaNacimientoT');
            $table->date('fechaExpedicionT');
            $table->string('correoT', 50);
            $table->string('nomenclatura', 50);
            $table->string('municipio', 50);
            $table->string('barrio', 50);
            $table->unsignedBigInteger('documentoEmpleado');
            $table->foreign('documentoEmpleado')->references('documentoEmpleado')->on('empleado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('terceros');
    }
}