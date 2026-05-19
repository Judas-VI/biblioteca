<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 30);
            $table->string('titulo', 200);
            $table->string('autores', 200);
            $table->string('editorial', 100);
            $table->year('anio_publicacion');
            $table->integer('num_ejemplar');
            $table->timestamps();
 
            // Un ISBN puede tener múltiples ejemplares, la clave compuesta
            // es isbn + num_ejemplar
            $table->unique(['isbn', 'num_ejemplar']);
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};