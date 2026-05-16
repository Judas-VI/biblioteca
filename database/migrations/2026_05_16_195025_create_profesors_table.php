<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->string('codigo')->primary();
            $table->string('nombre');
            $table->string('departamento');
            $table->string('correo')->unique();
            $table->text('direccion');
            $table->string('telefono', 20); 
            $table->string('sexo', 15);
            $table->date('fecha_nacimiento');
        
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
