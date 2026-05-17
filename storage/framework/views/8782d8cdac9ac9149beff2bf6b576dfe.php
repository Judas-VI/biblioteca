

<?php $__env->startSection('content'); ?>
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-2xl mx-auto mt-6">
    
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-extrabold text-gray-900">Registrar Nuevo Libro</h1>
        <a href="<?php echo e(route('libros.index')); ?>" class="text-green-600 hover:underline font-medium text-sm">
            &larr; Volver al catálogo
        </a>
    </div>

    <form action="<?php echo e(route('libros.store')); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>

        <div class="grid grid-cols-1 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">ISBN</label>
                <input type="text" name="isbn" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" placeholder="Ej. 978-3-16-148410-0" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Título del Libro</label>
                <input type="text" name="titulo" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
            <label class="block text-sm font-medium text-gray-700">Autor</label>
            <input type="text" name="autor" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Editorial</label>
                <input type="text" name="editorial" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Año de Publicación</label>
                <input type="number" name="anio_publicacion" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" placeholder="Ej. 2024" required>
            </div>
            <div>
            <label class="block text-sm font-medium text-gray-700">Número de Ejemplares</label>
            <input type="number" name="numero_ejemplares" min="0" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" placeholder="Ej. 5" required>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-md shadow transition">
                Guardar Libro
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alanm\Herd\biblioteca\resources\views/libros/create.blade.php ENDPATH**/ ?>