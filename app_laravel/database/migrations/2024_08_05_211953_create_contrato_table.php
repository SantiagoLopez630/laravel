<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoTable extends Migration
{
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->id('codigoContrato');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->unsignedBigInteger('codigoTipoContrato');
            $table->unsignedBigInteger('codigoCargo');
            $table->unsignedBigInteger('documentoEmpleado')->nullable();
            $table->foreign('codigoTipoContrato')->references('codigoTipoContrato')->on('tipocontrato');
            $table->foreign('codigoCargo')->references('codigoCargo')->on('cargo');
            $table->foreign('documentoEmpleado')->references('documentoEmpleado')->on('empleado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contrato');
    }
}
