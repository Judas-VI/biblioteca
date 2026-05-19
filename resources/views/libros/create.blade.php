@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg border shadow-sm">
    <h1 class="text-2xl font-bold mb-6">Registrar Libro</h1>

    {{-- Contenedor de Alertas de Error Globales --}}
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-50 border border-red-200 text-red-700 rounded text-sm">
            @foreach ($errors->all() as $error)
                <div>• {{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            
            {{-- ISBN --}}
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">ISBN *</label>
                <input type="text" name="isbn" value="{{ old('isbn') }}" placeholder="Ej: 978-3-16-148410-0" class="w-full border p-2 rounded outline-indigo-500" required>
                @error('isbn')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            {{-- Numero de Ejemplar --}}
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Número de Ejemplar *</label>
                <input type="number" name="num_ejemplar" value="{{ old('num_ejemplar', 1) }}" min="1" placeholder="Ej: 1" class="w-full border p-2 rounded outline-indigo-500" required>
                @error('num_ejemplar')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            {{-- Título del Libro (Ocupa las dos columnas porque suele ser largo) --}}
            <div class="mb-4 col-span-2">
                <label class="block text-sm font-medium mb-1">Título del Libro *</label>
                <input type="text" name="titulo" value="{{ old('titulo') }}" placeholder="Ej: Cien años de soledad" class="w-full border p-2 rounded outline-indigo-500" required>
                @error('titulo')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            {{-- Autores (Ocupa las dos columnas por si son varios) --}}
            <div class="mb-4 col-span-2">
                <label class="block text-sm font-medium mb-1">Autor(es) *</label>
                <input type="text" name="autores" value="{{ old('autores') }}" placeholder="Ej: Gabriel García Márquez" class="w-full border p-2 rounded outline-indigo-500" required>
                @error('autores')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            {{-- Editorial --}}
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Editorial *</label>
                <input type="text" name="editorial" value="{{ old('editorial') }}" placeholder="Ej: Editorial Sudamericana" class="w-full border p-2 rounded outline-indigo-500" required>
                @error('editorial')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            {{-- Año de Publicación --}}
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Año de Publicación *</label>
                <input type="number" name="anio_publicacion" value="{{ old('anio_publicacion', date('Y')) }}" min="1000" max="{{ date('Y') + 1 }}" placeholder="Ej: 1967" class="w-full border p-2 rounded outline-indigo-500" required>
                @error('anio_publicacion')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

        </div>

        {{-- Botones de Acción --}}
        <div class="mt-6">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded font-bold hover:bg-indigo-700 transition">
                Guardar libro
            </button>
            <a href="{{ route('libros.index') }}" class="ml-4 text-gray-600 hover:underline">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection