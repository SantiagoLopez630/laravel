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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->nullable();
            $table->date('birthdate')->nullable();
            $table->text('address')->nullable();
            $table->boolean('is_active')->default(true);
            $table->enum('role', ['admin', 'user', 'guest'])->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone_number', 'birthdate', 'address', 'is_active', 'role']);
        });
    }
};
