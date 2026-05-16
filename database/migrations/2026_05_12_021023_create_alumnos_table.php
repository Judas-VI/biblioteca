<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 20)->unique();
            $table->string('nombre', 150);
            $table->string('carrera', 50);
            $table->string('correo', 100)->unique();
            $table->string('direccion', 150);
            $table->string('telefono', 20);
            $table->char('sexo', 1);
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
