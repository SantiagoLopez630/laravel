<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentabancariaTable extends Migration
{
    public function up()
    {
        Schema::create('cuentabancaria', function (Blueprint $table) {
            $table->id('codigoCuenta');
            $table->string('nombreBanco', 50);
            $table->string('certificadoBancario', 50);
            $table->unsignedBigInteger('codigoBanco');
            $table->unsignedBigInteger('codigoTipoCuenta');
            $table->unsignedBigInteger('documentoEmpleado');
            $table->foreign('codigoBanco')->references('codigoBanco')->on('banco');
            $table->foreign('codigoTipoCuenta')->references('codigoTipoCuenta')->on('tipocuenta');
            $table->foreign('documentoEmpleado')->references('documentoEmpleado')->on('empleado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuentabancaria');
    }
}