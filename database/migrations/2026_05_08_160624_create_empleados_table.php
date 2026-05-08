<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo')->unique();
            $table->string('nombre', 100);
            $table->string('direccion', 150);
            $table->string('telefono', 20);
            $table->char('sexo', 1);                 // 'M' o 'F'
            $table->date('fecha_nacimiento');
            $table->enum('turno', ['Matutino', 'Vespertino', 'Nocturno']);
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
