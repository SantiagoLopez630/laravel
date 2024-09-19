<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArlTable extends Migration
{
    public function up()
    {
        Schema::create('arl', function (Blueprint $table) {
            $table->id('codigoArl');
            $table->string('nombreArl', 50);
            $table->integer('telefono');
            $table->unsignedBigInteger('nitEmpresa');
            $table->foreign('nitEmpresa')->references('nitEmpresa')->on('empresa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arl');
    }
}
