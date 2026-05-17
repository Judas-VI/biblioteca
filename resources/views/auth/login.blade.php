@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 border border-gray-200 rounded-lg shadow-sm">
    <h2 class="text-2xl font-bold mb-6 text-center text-indigo-700">Iniciar Sesión</h2>
    
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nombre de Usuario</label>
            <input type="text" name="nombre_del_usuario" value="{{ old('nombre_del_usuario') }}" class="w-full border rounded-md p-2 outline-indigo-500">
            @error('nombre_del_usuario') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium mb-1">Contraseña</label>
            <input type="password" name="contrasena" class="w-full border rounded-md p-2 outline-indigo-500">
            @error('contrasena') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            @error('credenciales') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md font-semibold hover:bg-indigo-700 transition">
            Ingresar al Sistema
        </button>
    </form>
</div>
@endsection