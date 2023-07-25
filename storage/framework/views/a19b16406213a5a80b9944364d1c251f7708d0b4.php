<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

    <div class="login-signup-form animated fadeInDown">
        <div class="form">
            <?php if(session('status')): ?>
                <div class="mb-4 font-medium text-sm text-green-600">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <h1 class="title">LOGIN</h1>
                <input type="email"id="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required
                    autofocus />
                <input type="password" id="password" name="password" placeholder="Password" required />
                <?php if($errors->has('email')): ?>
                    <p class="text-red-500 mb-3 text-sm"><?php echo e($errors->first('email')); ?></p>
                <?php endif; ?>
                <button class="btn btn-block">Login</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\report-app-main\resources\views/auth/login.blade.php ENDPATH**/ ?>