<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_del_usuario', 50)->unique();
            $table->string('contrasena', 255);
            $table->string('rol')->default('Empleado');
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
