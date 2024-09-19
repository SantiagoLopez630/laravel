<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevengadoTable extends Migration
{
    public function up()
    {
        Schema::create('devengado', function (Blueprint $table) {
            $table->id('codigoDevengado');
            $table->string('comision', 50);
            $table->integer('horasExtras');
            $table->string('dominicales', 50);
            $table->integer('auxilioTransporte');
            $table->unsignedBigInteger('documentoEmpleado');
            $table->foreign('documentoEmpleado')->references('documentoEmpleado')->on('empleado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('devengado');
    }
}
