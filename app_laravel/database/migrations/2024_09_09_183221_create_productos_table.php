<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion', 255);
            $table->string('presentacion', 255);
            $table->string('pais_origen', 50);
            $table->decimal('precio', 20,2);
            $table->unsignedInteger('stock');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
};