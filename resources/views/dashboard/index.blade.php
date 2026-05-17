@extends('layouts.app')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="h-48 w-full relative">
        <img src="{{ asset('imagenes/biblioteca.png') }}" 
             alt="Banner Biblioteca" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
    </div>

    <div class="p-10">
        <h1 class="text-3xl font-extrabold text-gray-900">Panel de Control</h1>
        <p class="text-gray-500 mt-2">
            Usuario activo:
            <span class="text-indigo-600 font-medium">{{ $nombreUsuario }}</span>
        </p>
    
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
            @if(session('usuario')['nombre'] === 'administrador')
            <div class="border p-6 rounded-lg hover:shadow-md transition bg-white">
                <h3 class="font-bold text-lg">Módulo de Empleados</h3>
                <p class="text-sm text-gray-500 mb-4">Administra el personal del sistema.</p>
                <div class="flex flex-col gap-1">
                    <a href="{{ route('empleados.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        Registrar &rarr;
                    </a>
                    <a href="{{ route('empleados.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta individual &rarr;
                    </a>

                    <a href="{{ route('empleados.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta general &rarr;
                    </a>
                    <a href="{{ route('empleados.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        cambiar &rarr;
                    </a>
                     <a href="{{ route('empleados.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        eliminar &rarr;
                    </a>
                </div>
            </div>

            <div class="border p-6 rounded-lg hover:shadow-md transition bg-white">
                <h3 class="font-bold text-lg">Módulo de Alumnos</h3>
                <p class="text-sm text-gray-500 mb-4">Administracion de los alumnos.</p>
                <div class="flex flex-col gap-1">
                    <a href="{{ route('alumnos.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        Registrar &rarr;
                    </a>
                    <a href="{{ route('alumnos.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta individual &rarr;
                    </a>
                     <a href="{{ route('alumnos.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta general &rarr;
                    </a>
                    <a href="{{ route('alumnos.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        cambiar &rarr;
                    </a>
                    <a href="{{ route('alumnos.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        eliminar &rarr;
                    </a>
                </div>
            </div>

            <div class="border p-6 rounded-lg hover:shadow-md transition bg-white">
                <h3 class="font-bold text-lg">Módulo de Profesores</h3>
                <p class="text-sm text-gray-500 mb-4">Administracion de los profesores.</p>
                <div class="flex flex-col gap-1">
                    <a href="{{ route('profesores.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        Registrar &rarr;
                    </a>
                    <a href="{{ route('profesores.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta individual &rarr;
                    </a>
                     <a href="{{ route('profesores.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta general &rarr;
                    </a>
                    <a href="{{ route('profesores.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        cambiar &rarr;
                    </a>
                    <a href="{{ route('profesores.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        eliminar &rarr;
                    </a>
                </div>
            </div>
            @endif

            <div class="border p-6 rounded-lg hover:shadow-md transition bg-white">
                <h3 class="font-bold text-lg">Módulo de Libros</h3>
                <p class="text-sm text-gray-500 mb-4">Administracion de los Libros.</p>
                <div class="flex flex-col gap-1">
                    <a href="{{ route('profesores.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        Registrar &rarr;
                    </a>
                    <a href="{{ route('profesores.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta individual &rarr;
                    </a>
                     <a href="{{ route('profesores.create') }}" class="text-indigo-600 font-semibold hover:underline">
                        consulta general &rarr;
                    </a>
                    <a href="{{ route('profesores.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        cambiar &rarr;
                    </a>
                    <a href="{{ route('profesores.index') }}" class="text-indigo-600 font-semibold hover:underline">
                        eliminar &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection