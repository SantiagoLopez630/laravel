<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeduccionesTable extends Migration
{
    public function up()
    {
        Schema::create('deducciones', function (Blueprint $table) {
            $table->id('codigoDeduccion');
            $table->integer('aporteSalud');
            $table->integer('aportePension');
            $table->string('embargos', 50);
            $table->unsignedBigInteger('documentoEmpleado');
            $table->foreign('documentoEmpleado')->references('documentoEmpleado')->on('empleado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deducciones');
    }
}
