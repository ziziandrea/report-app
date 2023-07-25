<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            
            <?php if($errors->any()): ?>
                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Dashboard</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Activity</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard_user')): ?>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="<?php echo e(route('backsite.user.index')); ?>">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                User Account</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($user->count() . ' UA'); ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72"
                                                viewBox="0 0 24 24" style="fill: rgba(201, 198, 198, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z">
                                                </path>
                                                <path
                                                    d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard_dosen')): ?>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="<?php echo e(route('backsite.dosen.index')); ?>">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Dosen</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($dosen->count() . ' Dosen'); ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72"
                                                viewBox="0 0 24 24" style="fill: rgba(201, 198, 198, 1);transform: ;msFilter:;">
                                                <path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard_laporan')): ?>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="<?php echo e(route('backsite.laporan.index')); ?>">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Laporan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo e(count($results) . ' Laporan'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72"
                                                viewBox="0 0 24 24" style="fill: rgba(201, 198, 198, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3zM5 8V5c0-.805.55-.988 1-1h13v12H5V8z">
                                                </path>
                                                <path d="M8 6h9v2H8z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard_mahasiswa')): ?>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="<?php echo e(route('backsite.mahasiswa.index')); ?>">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Mahasiswa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo e($mahasiswa->count() . ' Mahasiswa'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72"
                                                viewBox="0 0 24 24" style="fill: rgba(201, 198, 198, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>
    <!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/dashboard/index.blade.php ENDPATH**/ ?>