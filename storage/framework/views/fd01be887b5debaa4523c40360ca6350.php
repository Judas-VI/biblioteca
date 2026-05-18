 
<?php $__env->startSection('content'); ?>
<div class="bg-white p-10 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
    
    <h1 class="text-3xl font-extrabold text-gray-900 text-center">Panel de Control</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl mb-10 mt-8">
        
        <?php if(session('usuario.rol') === 'Administrador'): ?>

            <a href="<?php echo e(route('empleados.index')); ?>" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
                <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">Módulo de Empleados</h3>
                <p class="text-sm text-gray-500 group-hover:text-indigo-200 transition mt-1">Consulta general</p>
            </a>

            <a href="<?php echo e(route('alumnos.index')); ?>" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
                <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">Módulo de Alumnos</h3>
                <p class="text-sm text-gray-500 group-hover:text-indigo-200 transition mt-1">Consulta general</p>
            </a>

            <a href="<?php echo e(route('profesores.index')); ?>" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
                <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">Módulo de Profesores</h3>
                <p class="text-sm text-gray-500 group-hover:text-indigo-200 transition mt-1">Consulta general</p>
            </a>

        <?php elseif(session('usuario.rol') === 'Empleado'): ?>

            <a href="<?php echo e(route('libros.index')); ?>" class="group border-2 border-green-600 p-6 rounded-xl text-center hover:bg-green-600 transition duration-300 shadow-sm md:col-span-3 max-w-md mx-auto w-full">
                <h3 class="font-bold text-xl text-green-600 group-hover:text-white transition">Módulo de Libros</h3>
                <p class="text-sm text-gray-500 group-hover:text-indigo-200 transition mt-1">Consulta general</p>
            </a>

        <?php else: ?>
            <div class="bg-red-50 text-red-700 p-4 rounded-lg text-center md:col-span-3 w-full border border-red-200">
                Error: El usuario no cuenta con un rol válido asignado en el sistema.
            </div>
        <?php endif; ?>

    </div>

    <div class="bg-gray-100 p-3 rounded-lg border border-gray-200 w-full max-w-2xl shadow-sm">
        <img src="<?php echo e(asset('imagenes/biblioteca.jpg')); ?>" alt="Biblioteca" class="w-full h-auto object-cover rounded shadow">
    </div>
 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\franc\OneDrive\Escritorio\Ingenieria en Computo\Semestre V\Base de datos\Proyecto_Final\biblioteca\resources\views/dashboard/index.blade.php ENDPATH**/ ?>