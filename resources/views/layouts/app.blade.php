<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Biblioteca - CUCEI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-indigo-700 text-white shadow-lg p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-xl font-bold tracking-wider">BIBLIOTECA</a>
            
            @if(session()->has('usuario'))
                <div class="flex items-center gap-6">
                    <span>Bienvenido, <b>{{ session('usuario')['nombre'] }}</b></span>
                    <a href="{{ route('empleados.index') }}" class="hover:text-indigo-200">Empleados</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm transition">Cerrar Sesión</button>
                    </form>
                </div>
            @endif
        </div>
    </nav>

    <div class="container mx-auto mt-8 px-4">
        @if(session('exito'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('exito') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>