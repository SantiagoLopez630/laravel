<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoTable extends Migration
{
    public function up()
    {
        Schema::create('cargo', function (Blueprint $table) {
            $table->id('codigoCargo');
            $table->string('nombreCargo', 50);
            $table->string('descripcion', 100);
            $table->string('nivelJerarquico', 50);
            $table->integer('salario');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargo');
    }
}
