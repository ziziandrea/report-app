<?php $__env->startSection('title', 'Edit - Laporan'); ?>

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
                    <h3 class="content-header-title mb-0 d-inline-block">Edit Laporan</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Laporan</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Form Input</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Please complete the input <code>required</code>, before you click the submit
                                                button.</p>
                                        </div>
                                        <form class="form form-horizontal"
                                            action="<?php echo e(route('backsite.laporan.confirm_revisi', $laporan->id)); ?>"
                                            method="POST" enctype="multipart/form-data">

                                            <?php echo method_field('PUT'); ?>
                                            <?php echo csrf_field(); ?>
                                            <div class="form-body">
                                                
                                                <h4 class="form-section"><i class="fa fa-edit"></i> Form Laporan</h4>
                                                <?php $__currentLoopData = $laporanGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $created_at => $laporans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div
                                                        class="form-group row <?php echo e($errors->has('dosen_id') ? 'has-error' : ''); ?>">
                                                        <label class="col-md-3 label-control">Nama Dosen <code
                                                                style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="dosen_id" id="dosen_id"
                                                                class="form-control select2" required>
                                                                <option value="<?php echo e(''); ?>" disabled selected>Choose
                                                                </option>
                                                                <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dosen_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($dosen_item->id); ?>"
                                                                        <?php echo e($laporan->dosen_id == $dosen_item->id ? 'selected' : ''); ?>>
                                                                        <?php echo e($dosen_item->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>

                                                            <?php if($errors->has('dosen_id')): ?>
                                                                <p style="font-style: bold; color: red;">
                                                                    <?php echo e($errors->first('dosen_id')); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="form-group row <?php echo e($errors->has('kelas_id') ? 'has-error' : ''); ?>">
                                                        <label class="col-md-3 label-control">Nama Kelas <code
                                                                style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="kelas_id" id="kelas_id"
                                                                class="form-control select2" required>
                                                                <option value="<?php echo e(''); ?>" disabled selected>
                                                                    Choose
                                                                </option>
                                                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $kelas_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($kelas_item->id); ?>"
                                                                        <?php echo e($laporan->kelas_id == $kelas_item->id ? 'selected' : ''); ?>>
                                                                        <?php echo e($kelas_item->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>

                                                            <?php if($errors->has('kelas_id')): ?>
                                                                <p style="font-style: bold; color: red;">
                                                                    <?php echo e($errors->first('kelas_id')); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <?php $__currentLoopData = $laporans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="agenda">Agenda
                                                                <code style="color:red;">required</code></label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" id="agenda"
                                                                    name="agenda[<?php echo e($loop->index); ?>]" class="form-control"
                                                                    placeholder="example 28731123411415"
                                                                    value="<?php echo e(old('agenda.' . $loop->index, $item->agenda)); ?>"
                                                                    autocomplete="off" required>

                                                                <?php if($errors->has('agenda')): ?>
                                                                    <p style="font-style: bold; color: red;">
                                                                        <?php echo e($errors->first('agenda')); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="deskripsi">Deskripsi
                                                                <code style="color:red;">required</code></label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" id="deskripsi"
                                                                    name="deskripsi[<?php echo e($loop->index); ?>]"
                                                                    class="form-control" placeholder="example Bengkalis"
                                                                    value="<?php echo e(old('deskripsi.' . $loop->index, $item->deskripsi)); ?>"
                                                                    autocomplete="off" required>

                                                                <?php if($errors->has('deskripsi')): ?>
                                                                    <p style="font-style: bold; color: red;">
                                                                        <?php echo e($errors->first('deskripsi')); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="tindakan">Tindakan
                                                                <code style="color:red;">required</code></label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" id="tindakan"
                                                                    name="tindakan[<?php echo e($loop->index); ?>]"
                                                                    class="form-control"
                                                                    value="<?php echo e(old('tindakan.' . $loop->index, $item->tindakan)); ?>"
                                                                    autocomplete="off"
                                                                    placeholder="example +628xxxxxxxxxx" required>

                                                                <?php if($errors->has('tindakan')): ?>
                                                                    <p style="font-style: bold; color: red;">
                                                                        <?php echo e($errors->first('tindakan')); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="lampiran">Lampiran
                                                                <code style="color:green;">optional</code></label>
                                                            <div class="col-md-9 mx-auto">
                                                                <div class="custom-file">
                                                                    <input type="file"
                                                                        accept="image/png, image/svg, image/jpeg"
                                                                        class="custom-file-input" id="lampiran"
                                                                        name="lampiran[<?php echo e($loop->index); ?>]"
                                                                        value="<?php echo e(old('lampiran.' . $loop->index, $item->lampiran)); ?>">
                                                                    <label class="custom-file-label" for="lampiran"
                                                                        aria-describedby="lampiran">Choose File</label>
                                                                </div>

                                                                <p class="text-muted"><small class="text-danger">Hanya
                                                                        dapat
                                                                        mengunggah 1 file</small><small> dan yang dapat
                                                                        digunakan
                                                                        JPEG, SVG, PNG & Maksimal ukuran file hanya 10
                                                                        MegaBytes</small></p>

                                                                <?php if($errors->has('lampiran')): ?>
                                                                    <p style="font-style: bold; color: red;">
                                                                        <?php echo e($errors->first('lampiran')); ?></p>
                                                                <?php endif; ?>

                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>

                                            <div class="form-actions text-right">
                                                <a href="<?php echo e(route('backsite.laporan.index')); ?>" style="width:120px;"
                                                    class="btn bg-blue-grey text-white mr-1"
                                                    onclick="return confirm('Are you sure want to close this page? , Any changes you make will not be saved.')">
                                                    <i class="ft-x"></i> Cancel
                                                </a>
                                                <button type="submit" style="width:120px;" class="btn btn-cyan"
                                                    onclick="return confirm('Are you sure want to save this data ?')">
                                                    <i class="la la-check-square-o"></i> Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
    <!-- END: Content-->

<?php $__env->stopSection(); ?>


<?php $__env->startPush('after-script'); ?>
    
    <script src="<?php echo e(asset('/assets/backsite/third-party/inputmask/dist/jquery.inputmask.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/backsite/third-party/inputmask/dist/inputmask.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/backsite/third-party/inputmask/dist/bindings/inputmask.binding.js')); ?>"></script>

    <script>
        $(function() {
            $(":input").inputmask();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/operational/laporan/revisi.blade.php ENDPATH**/ ?>