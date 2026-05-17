

<?php $__env->startSection('content'); ?>
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-2xl mx-auto mt-6">
    
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h1 class="text-2xl font-extrabold text-gray-900">Detalles del Libro</h1>
        <div class="flex gap-3">
            <a href="<?php echo e(route('libros.edit', $libro->isbn)); ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                ✏️ Editar
            </a>
            <a href="<?php echo e(route('libros.index')); ?>" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                &larr; Volver
            </a>
        </div>
    </div>

    <div class="space-y-6 text-gray-700">
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">ISBN</p>
            <p class="text-lg font-medium text-green-600 font-mono"><?php echo e($libro->isbn); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Título</p>
            <p class="text-xl font-bold text-gray-900"><?php echo e($libro->titulo); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Autor</p>
            <p class="text-lg font-medium"><?php echo e($libro->autor); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Editorial</p>
            <p class="text-lg font-medium"><?php echo e($libro->editorial); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Año de Publicación</p>
            <p class="text-lg font-medium"><?php echo e($libro->anio_publicacion); ?></p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Ejemplares Disponibles</p>
            <p class="text-lg font-medium text-gray-900 bg-gray-100 inline-block px-3 py-1 rounded"><?php echo e($libro->numero_ejemplares); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alanm\Herd\biblioteca\resources\views/libros/show.blade.php ENDPATH**/ ?>