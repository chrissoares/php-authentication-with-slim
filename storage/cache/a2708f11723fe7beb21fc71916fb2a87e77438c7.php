

<?php $__env->startSection('content'); ?>
    <div style="padding:10px">
            Home Page

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <pre>
                    <span>Full Name:</span> <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>

                    <span>Email:</span> <?php echo e($user->email); ?>

                    <?php if($user->actingAs('Admin', 'SuperAdmin')): ?><span>Password:</span> <?php echo e($user->password); ?> <?php endif; ?>
                </pre>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projetos\Php\Php-Slim-Framework-by-Zak-H\resources\views/auth/home.blade.php ENDPATH**/ ?>