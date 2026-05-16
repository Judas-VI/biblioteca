

<?php $__env->startSection('content'); ?>
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-3xl mx-auto mt-6">
    
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h1 class="text-2xl font-extrabold text-gray-900">Detalles del Empleado</h1>
        <div class="flex gap-3">
            <a href="<?php echo e(route('empleados.edit', $empleado->id)); ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                ✏️ Editar
            </a>
            <a href="<?php echo e(route('empleados.index')); ?>" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                &larr; Volver
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700">
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Código de Empleado</p>
            <p class="text-lg font-medium text-indigo-600"><?php echo e($empleado->codigo); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Nombre Completo</p>
            <p class="text-lg font-medium"><?php echo e($empleado->nombre); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Turno</p>
            <p class="text-lg font-medium"><?php echo e($empleado->turno); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Teléfono</p>
            <p class="text-lg font-medium"><?php echo e($empleado->telefono); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alanm\Herd\biblioteca\resources\views/empleados/show.blade.php ENDPATH**/ ?>