<?php $__env->startSection('title', 'Edit - User'); ?>

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
                    <h3 class="content-header-title mb-0 d-inline-block">Edit User</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">User</li>
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
                                            action="<?php echo e(route('backsite.user.update', [$user->id])); ?>" method="POST"
                                            enctype="multipart/form-data">

                                            <?php echo method_field('PUT'); ?>
                                            <?php echo csrf_field(); ?>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="fa fa-edit"></i> Form User</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="name">Name <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="example John Doe or Jane"
                                                            value="<?php echo e(old('name', isset($user) ? $user->name : '')); ?>"
                                                            autocomplete="off" required>

                                                        <?php if($errors->has('name')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('name')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="email">Email <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="email" name="email"
                                                            class="form-control"
                                                            placeholder="example People@mail.com or Human@mail.com"
                                                            value="<?php echo e(old('email', isset($user) ? $user->email : '')); ?>"
                                                            autocomplete="off" data-inputmask="'alias': 'email'" required>

                                                        <?php if($errors->has('email')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('email')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row <?php echo e($errors->has('role') ? 'has-error' : ''); ?>">
                                                    <label class="col-md-3 label-control">Role <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <label for="role">
                                                            <span
                                                                class="btn btn-warning btn-sm select-all"><?php echo e('Select all'); ?></span>
                                                            <span
                                                                class="btn btn-warning btn-sm deselect-all"><?php echo e('Deselect all'); ?></span>
                                                        </label>

                                                        <select name="role[]" id="role"
                                                            class="form-control select2-full-bg" data-bgcolor="teal"
                                                            data-bgcolor-variation="lighten-3" data-text-color="black"
                                                            multiple="multiple" required>
                                                            <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($id); ?>"
                                                                    <?php echo e(in_array($id, old('role', [])) || (isset($user) && $user->role->contains($id)) ? 'selected' : ''); ?>>
                                                                    <?php echo e($role); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        <?php if($errors->has('role')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('role')); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group row <?php echo e($errors->has('type_user_id') ? 'has-error' : ''); ?>">
                                                    <label class="col-md-3 label-control">Type User <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="type_user_id" id="type_user_id"
                                                            class="form-control select2" required>
                                                            <option value="<?php echo e(''); ?>" disabled selected>Choose
                                                            </option>
                                                            <?php $__currentLoopData = $type_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type_user_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($type_user_item->id); ?>"
                                                                    <?php echo e($type_user_item->id == $user->detail_user->type_user_id ? 'selected' : ''); ?>>
                                                                    <?php echo e($type_user_item->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        <?php if($errors->has('type_user_id')): ?>
                                                            <p style="font-style: bold; color: red;">
                                                                <?php echo e($errors->first('type_user_id')); ?></p>
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
                                                <a href="<?php echo e(route('backsite.user.index')); ?>" style="width:120px;"
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
        jQuery(document).ready(function($) {
            $('.select-all').click(function() {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            })

            $('.deselect-all').click(function() {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', '')
                $select2.trigger('change')
            })
        });

        $(function() {
            $(":input").inputmask();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/management-access/user/edit.blade.php ENDPATH**/ ?>