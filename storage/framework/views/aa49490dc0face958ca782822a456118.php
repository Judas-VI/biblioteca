<?php $__env->startSection('content'); ?>
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Gestión de Empleados</h1>
    <a href="<?php echo e(route('empleados.create')); ?>" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Registrar Nuevo</a>
</div>

<div class="bg-white shadow-sm border rounded-lg overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-gray-50">
            <tr>
                <th class="p-3 border-b font-bold">Código</th>
                <th class="p-3 border-b font-bold">Nombre</th>
                <th class="p-3 border-b font-bold">Turno</th>
                <th class="p-3 border-b font-bold text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="hover:bg-gray-50">
                <td class="p-3 border-b"><?php echo e($emp->codigo); ?></td>
                <td class="p-3 border-b"><?php echo e($emp->nombre); ?></td>
                <td class="p-3 border-b">
                    <span class="px-2 py-1 rounded text-xs <?php echo e($emp->turno == 'Matutino' ? 'bg-yellow-100 text-yellow-800' : ($emp->turno == 'Vespertino' ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800')); ?>">
                        <?php echo e($emp->turno); ?>

                    </span>
                </td>
                <td class="p-3 border-b text-center flex justify-center gap-4">
                    <a href="<?php echo e(route('empleados.show', $emp->id)); ?>" class="text-blue-600 hover:underline text-sm">Ver</a>
                    <a href="<?php echo e(route('empleados.edit', $emp->id)); ?>" class="text-yellow-600 hover:underline text-sm">Editar</a>
                    <form action="<?php echo e(route('empleados.destroy', $emp->id)); ?>" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminarlo?')">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="text-red-600 hover:underline text-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alanm\Herd\biblioteca\resources\views/empleados/index.blade.php ENDPATH**/ ?>