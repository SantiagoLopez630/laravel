<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id('nitEmpresa');
            $table->string('nombreEmpresa', 50);
            $table->integer('telefono');
            $table->string('correo', 50);
            $table->string('nomenclatura', 50);
            $table->string('municipio', 50);
            $table->string('barrio', 50);
            $table->string('tipoEntidad', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
