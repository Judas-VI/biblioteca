

<?php $__env->startSection('content'); ?>
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
    
    <div class="flex flex-col sm:flex-row justify-between items-center border-b pb-4 mb-6 gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-gray-900">Módulo de Libros</h1>
            <p class="text-sm text-gray-500">Inventario y catálogo de la biblioteca.</p>
        </div>
        <a href="<?php echo e(route('libros.create')); ?>" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-bold shadow transition flex items-center gap-1">
            ➕ Registrar Libro
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                    <th class="p-3 border-b">ISBN</th>
                    <th class="p-3 border-b">Título</th>
                    <th class="p-3 border-b">Editorial</th>
                    <th class="p-3 border-b">Año</th>
                    <th class="p-3 border-b text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-600 divide-y divide-gray-100">
                <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-50 transition">
                    <td class="p-3 font-mono text-green-600 font-semibold"><?php echo e($libro->isbn); ?></td>
                    <td class="p-3 font-medium text-gray-900"><?php echo e($libro->titulo); ?></td>
                    <td class="p-3"><?php echo e($libro->editorial); ?></td>
                    <td class="p-3"><?php echo e($libro->anio_publicacion); ?></td>
                    
                    <td class="p-3 flex justify-center gap-4">
                        <a href="<?php echo e(route('libros.show', $libro->isbn)); ?>" class="text-blue-600 hover:underline font-medium">Ver</a>
                        <a href="<?php echo e(route('libros.edit', $libro->isbn)); ?>" class="text-yellow-600 hover:underline font-medium">Editar</a>
                        
                        <form action="<?php echo e(route('libros.destroy', $libro->isbn)); ?>" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este libro?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:underline font-medium">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <a href="<?php echo e(route('dashboard')); ?>" class="text-sm text-gray-500 hover:text-green-600 transition">
            &larr; Volver al Panel de Control
        </a>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alanm\Herd\biblioteca\resources\views/libros/index.blade.php ENDPATH**/ ?>