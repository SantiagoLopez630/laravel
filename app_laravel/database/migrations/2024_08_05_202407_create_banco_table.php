<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancoTable extends Migration
{
    public function up()
    {
        Schema::create('banco', function (Blueprint $table) {
            $table->id('codigoBanco');
            $table->string('nombreBanco');
            $table->integer('telefonoBanco');
            $table->string('correoBanco');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banco');
    }
}
