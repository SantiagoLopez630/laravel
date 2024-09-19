<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameEmpleadoToEmpleados extends Migration
{
    public function up()
    {
        Schema::rename('empleado', 'empleados');
    }

    public function down()
    {
        Schema::rename('empleados', 'empleado');
    }
}

