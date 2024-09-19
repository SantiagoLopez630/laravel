<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipocontratoTable extends Migration
{
    public function up()
    {
        Schema::create('tipocontrato', function (Blueprint $table) {
            $table->id('codigoTipoContrato');
            $table->string('nombreTipoContrato', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipocontrato');
    }
}
