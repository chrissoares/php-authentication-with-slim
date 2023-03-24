

<?php $__env->startSection('content'); ?>
    <div style="padding:10px">
        <p>
            <h1>Welcome <?php echo e($name); ?></h1>
            <small>(You id is <?php echo e($id); ?>)</small>
        </p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projetos\Php\Php-Slim-Framework-by-Zak-H\resources\views/user/show.blade.php ENDPATH**/ ?>