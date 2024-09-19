<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipocuentaTable extends Migration
{
    public function up()
    {
        Schema::create('tipocuenta', function (Blueprint $table) {
            $table->id('codigoTipoCuenta');
            $table->string('nombreTipoCuenta', 50);
            $table->string('descripcionTipoCuenta', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipocuenta');
    }
}