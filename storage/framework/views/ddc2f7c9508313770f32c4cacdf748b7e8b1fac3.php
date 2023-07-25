<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li
                class="<?php echo e(request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('backsite.dashboard.index')); ?>">
                    <i
                        class="<?php echo e(request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'bx bx-category-alt bx-flashing' : 'bx bx-category-alt'); ?>"></i><span
                        class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            <li class=" navigation-header"><span data-i18n="Application">Application</span><i class="la la-ellipsis-h"
                    data-toggle="tooltip" data-placement="right" data-original-title="Application"></i>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('management_access')): ?>
                <li class=" nav-item"><a href="#"><i
                            class="<?php echo e(request()->is('backsite/permission') || request()->is('backsite/permission/*') || request()->is('backsite/*/permission') || request()->is('backsite/*/permission/*') || request()->is('backsite/role') || request()->is('backsite/role/*') || request()->is('backsite/*/role') || request()->is('backsite/*/role/*') || request()->is('backsite/user') || request()->is('backsite/user/*') || request()->is('backsite/*/user') || request()->is('backsite/*/user/*') ? 'bx bx-group bx-flashing' : 'bx bx-group'); ?>"></i><span
                            class="menu-title" data-i18n="Management Access">Management Access</span></a>
                    <ul class="menu-content">

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/permission') || request()->is('backsite/permission/*') || request()->is('backsite/*/permission') || request()->is('backsite/*/permission/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.permission.index')); ?>">
                                    <i></i><span>Permission</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/role') || request()->is('backsite/role/*') || request()->is('backsite/*/role') || request()->is('backsite/*/role/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.role.index')); ?>">
                                    <i></i><span>Role</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/user') || request()->is('backsite/user/*') || request()->is('backsite/*/user') || request()->is('backsite/*/user/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.user.index')); ?>">
                                    <i></i><span>User</span>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('master_data_access')): ?>
                <li class=" nav-item"><a href="#"><i
                            class="<?php echo e(request()->is('backsite/kelas') || request()->is('backsite/kelas/*') || request()->is('backsite/*/kelas') || request()->is('backsite/*/kelas/*') || request()->is('backsite/position') || request()->is('backsite/position/*') || request()->is('backsite/*/position') || request()->is('backsite/*/position/*') || request()->is('backsite/type_user') || request()->is('backsite/type_user/*') || request()->is('backsite/*/type_user') || request()->is('backsite/*/type_user/*') ? 'bx bx-customize bx-flashing' : 'bx bx-customize'); ?>"></i><span
                            class="menu-title" data-i18n="Master Data">Master Data</span></a>
                    <ul class="menu-content">

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('kelas_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/kelas') || request()->is('backsite/kelas/*') || request()->is('backsite/*/kelas') || request()->is('backsite/*/kelas/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.kelas.index')); ?>">
                                    <i></i><span>Kelas</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('position_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/position') || request()->is('backsite/position/*') || request()->is('backsite/*/position') || request()->is('backsite/*/position/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.position.index')); ?>">
                                    <i></i><span>Position</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('type_user_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/type_user') || request()->is('backsite/type_user/*') || request()->is('backsite/*/type_user') || request()->is('backsite/*/type_user/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.type_user.index')); ?>">
                                    <i></i><span>Type User</span>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('operational_access')): ?>
                <li class=" nav-item"><a href="#"><i
                            class="<?php echo e(request()->is('backsite/dosen') || request()->is('backsite/dosen/*') || request()->is('backsite/*/dosen') || request()->is('backsite/*/dosen/*') || request()->is('backsite/laporan') || request()->is('backsite/laporan/*') || request()->is('backsite/*/laporan') || request()->is('backsite/*/laporan/*') || request()->is('backsite/mahasiswa') || request()->is('backsite/mahasiswa/*') || request()->is('backsite/*/mahasiswa') || request()->is('backsite/*/mahasiswa/*') ? 'bx bx-hive bx-flashing' : 'bx bx-hive'); ?>"></i><span
                            class="menu-title" data-i18n="Operational">Operational</span></a>
                    <ul class="menu-content">

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dosen_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/dosen') || request()->is('backsite/dosen/*') || request()->is('backsite/*/dosen') || request()->is('backsite/*/dosen/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.dosen.index')); ?>">
                                    <i></i><span>Dosen</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('laporan_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/laporan') || request()->is('backsite/laporan/*') || request()->is('backsite/*/laporan') || request()->is('backsite/*/laporan/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.laporan.index')); ?>">
                                    <i></i><span>Laporan</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mahasiswa_access')): ?>
                            <li
                                class="<?php echo e(request()->is('backsite/mahasiswa') || request()->is('backsite/mahasiswa/*') || request()->is('backsite/*/mahasiswa') || request()->is('backsite/*/mahasiswa/*') ? 'active' : ''); ?> ">
                                <a class="menu-item" href="<?php echo e(route('backsite.mahasiswa.index')); ?>">
                                    <i></i><span>Mahasiswa</span>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
<?php /**PATH C:\laragon\www\report-app-main\resources\views/components/backsite/menu.blade.php ENDPATH**/ ?>