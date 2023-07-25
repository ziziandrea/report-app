<?php $__env->startSection('title', 'Edit - Dosen'); ?>

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
                    <h3 class="content-header-title mb-0 d-inline-block">Edit Dosen</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Dosen</li>
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
                                            action="<?php echo e(route('backsite.dosen.update', [$dosen->id])); ?>" method="POST"
                                            enctype="multipart/form-data">

                                            <?php echo method_field('PUT'); ?>
                                            <?php echo csrf_field(); ?>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="fa fa-edit"></i> Form Dosen</h4>

                                                <div
                                                    class="form-group row <?php echo e($errors->has('user_id') ? 'has-error' : ''); ?>">
                                                    <label class="col-md-3 label-control">User Account <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="user_id" id="user_id" class="form-control select2"
                                                            required>
                                                            <option value="<?php echo e(''); ?>" disabled selected>Choose
                                                            </option>
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($user_item->id); ?>"
                                                                    <?php echo e($dosen->user_id == $user_item->id ? 'selected' : ''); ?>>
                                                                    <?php echo e($user_item->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        <?php if($errors->has('user_id')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('user_id')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="name">Name <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="name" name="name"
                                                            class="form-control"
                                                            placeholder="example dentist or dermatology"
                                                            value="<?php echo e(old('name', isset($dosen) ? $dosen->name : '')); ?>"
                                                            autocomplete="off" required>

                                                        <?php if($errors->has('name')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('name')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nik_nip">NIK/NIP <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="nik_nip" name="nik_nip"
                                                            class="form-control" placeholder="example 28731123411415"
                                                            value="<?php echo e(old('nik_nip', isset($dosen) ? $dosen->nik_nip : '')); ?>"
                                                            autocomplete="off" required>

                                                        <?php if($errors->has('nik_nip')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('nik_nip')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="birth_place">Birth Place
                                                        <code style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="birth_place" name="birth_place"
                                                            class="form-control" placeholder="example Bengkalis"
                                                            value="<?php echo e(old('birth_place', isset($dosen) ? $dosen->birth_place : '')); ?>"
                                                            autocomplete="off" required>

                                                        <?php if($errors->has('birth_place')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('birth_place')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="birth_date">Birth Date <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="date" id="birth_date" name="birth_date"
                                                            class="form-control"
                                                            value="<?php echo e(old('birth_date', isset($dosen) ? $dosen->birth_date : '')); ?>"
                                                            autocomplete="off" required>

                                                        <?php if($errors->has('birth_date')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('birth_date')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group row <?php echo e($errors->has('gender') ? 'has-error' : ''); ?>">
                                                    <label class="col-md-3 label-control">Gender <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="gender" id="gender"
                                                            class="form-control select2" required>
                                                            <option
                                                                value="<?php echo e(old('gender', isset($dosen) ? $dosen->gender : '')); ?>"
                                                                disabled selected>
                                                                <?php if($dosen->gender == 1): ?>
                                                                    <span>Laki-laki</span>
                                                                <?php else: ?>
                                                                    <span>Perempuan</span>
                                                                <?php endif; ?>
                                                            </option>
                                                            <option value="1">Laki-laki</option>
                                                            <option value="2">Perempuan</option>
                                                        </select>

                                                        <?php if($errors->has('gender')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('gender')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="contact">Contact <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="contact" name="contact"
                                                            class="form-control"
                                                            value="<?php echo e(old('contact', isset($dosen) ? $dosen->contact : '')); ?>"
                                                            autocomplete="off" placeholder="example +628xxxxxxxxxx"
                                                            required>

                                                        <?php if($errors->has('contact')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('contact')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="address">Address <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="address" name="address"
                                                            class="form-control"
                                                            value="<?php echo e(old('address', isset($dosen) ? $dosen->address : '')); ?>"
                                                            autocomplete="off"
                                                            placeholder="example Jalan Pramuka Gang Haji Ilyas" required>

                                                        <?php if($errors->has('address')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('address')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group row <?php echo e($errors->has('position_id') ? 'has-error' : ''); ?>">
                                                    <label class="col-md-3 label-control">Position <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="position_id" id="position_id"
                                                            class="form-control select2" required>
                                                            <option
                                                                value="<?php echo e(old('position_id', isset($dosen) ? $dosen->position_id : '')); ?>"
                                                                disabled selected><?php echo e($dosen->position->name); ?>

                                                            </option>
                                                            <?php $__currentLoopData = $position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $position_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($position_item->id); ?>">
                                                                    <?php echo e($position_item->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        <?php if($errors->has('position_id')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('position_id')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="photo">Photo <code
                                                            style="color:green;">optional</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                accept="image/png, image/svg, image/jpeg"
                                                                class="custom-file-input" id="photo" name="photo">
                                                            <label class="custom-file-label" for="photo"
                                                                aria-describedby="photo">Choose File</label>
                                                        </div>

                                                        <p class="text-muted"><small class="text-danger">Hanya dapat
                                                                mengunggah 1 file</small><small> dan yang dapat digunakan
                                                                JPEG, SVG, PNG & Maksimal ukuran file hanya 10
                                                                MegaBytes</small></p>

                                                        <?php if($errors->has('photo')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('photo')); ?></p>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions text-right">
                                                <a href="<?php echo e(route('backsite.dosen.index')); ?>" style="width:120px;"
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/operational/dosen/edit.blade.php ENDPATH**/ ?>