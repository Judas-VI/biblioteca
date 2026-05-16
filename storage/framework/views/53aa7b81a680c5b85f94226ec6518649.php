 
<?php $__env->startSection('content'); ?>
<div class="bg-white p-10 rounded-xl shadow-sm border border-gray-100">
    <h1 class="text-3xl font-extrabold text-gray-900">Panel de Control</h1>
    <p class="text-gray-500 mt-2">
        Usuario activo:
        <span class="text-indigo-600 font-medium"><?php echo e($nombreUsuario); ?></span>
    </p>
 
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
 
        <div class="border p-6 rounded-lg hover:shadow-md transition">
            <h3 class="font-bold text-lg">Módulo de Empleados</h3>
            <p class="text-sm text-gray-500 mb-4">Administra el personal del sistema.</p>
            <div class="flex flex-col gap-1">
                <a href="<?php echo e(route('empleados.create')); ?>" class="text-indigo-600 font-semibold hover:underline">
                    Registrar &rarr;
                </a>
                <a href="<?php echo e(route('empleados.index')); ?>" class="text-indigo-600 font-semibold hover:underline">
                    Consulta general &rarr;
                </a>
            </div>
        </div>

        <div class="border p-6 rounded-lg hover:shadow-md transition">
            <h3 class="font-bold text-lg">Módulo de Alumnos</h3>
            <p class="text-sm text-gray-500 mb-4">Registro y consulta de alumnos ICOM.</p>
            <div class="flex flex-col gap-1">
                <a href="<?php echo e(route('alumnos.create')); ?>" class="text-indigo-600 font-semibold hover:underline">
                    Registrar &rarr;
                </a>
                <a href="<?php echo e(route('alumnos.index')); ?>" class="text-indigo-600 font-semibold hover:underline">
                    Consulta general &rarr;
                </a>
            </div>
        </div>
 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alanm\Herd\biblioteca\resources\views/dashboard/index.blade.php ENDPATH**/ ?>