<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $__env->make('includes.frontsite.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title><?php echo $__env->yieldContent('title'); ?> | E-Laporan</title>

    <?php echo $__env->yieldPushContent('before-style'); ?>
    <?php echo $__env->make('includes.frontsite.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-style'); ?>

</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\report-app-main\resources\views/layouts/auth.blade.php ENDPATH**/ ?>