<!--Layout contiene tanto la dashboard como la estuctua tipica da un html para una vista.-->

<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto bg-white p-8 border border-gray-200 rounded-lg shadow-sm">
    <h2 class="text-2xl font-bold mb-6 text-center text-indigo-700">Iniciar Sesión</h2>
    
    <form action="<?php echo e(route('login.post')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nombre de Usuario</label>
            <input type="text" name="nombre_del_usuario" value="<?php echo e(old('nombre_del_usuario')); ?>" class="w-full border rounded-md p-2 outline-indigo-500">
            <?php $__errorArgs = ['nombre_del_usuario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium mb-1">Contraseña</label>
            <input type="password" name="contrasena" class="w-full border rounded-md p-2 outline-indigo-500">
            <?php $__errorArgs = ['contrasena'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php $__errorArgs = ['credenciales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs block mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md font-semibold hover:bg-indigo-700 transition">
            Ingresar al Sistema
        </button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alanm\Herd\biblioteca\resources\views/auth/login.blade.php ENDPATH**/ ?>