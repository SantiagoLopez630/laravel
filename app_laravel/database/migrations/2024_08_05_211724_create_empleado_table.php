<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id('documentoEmpleado');
            $table->string('nombre1', 50);
            $table->string('nombre2', 50);
            $table->string('apellido1', 50);
            $table->string('apellido2', 50);
            $table->string('tipoDocumento', 50);
            $table->string('estadoCivil', 50);
            $table->string('genero', 50);
            $table->integer('telefono');
            $table->date('fechaNacimiento');
            $table->date('fechaExpedicion');
            $table->string('correo', 50);
            $table->string('nomenclatura', 50);
            $table->string('municipio', 50);
            $table->string('barrio', 50);
            $table->unsignedBigInteger('nitEmpresa');
            $table->foreign('nitEmpresa')->references('nitEmpresa')->on('empresa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
