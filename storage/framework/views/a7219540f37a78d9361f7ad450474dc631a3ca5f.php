<?php $__env->startSection('title', 'Dosen'); ?>

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
                    <h3 class="content-header-title mb-0 d-inline-block">Dosen</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('backsite.dashboard.index')); ?>">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Dosen</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dosen_create')): ?>
                <div class="content-body">
                    <section id="add-home">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <a data-action="collapse">
                                            <h4 class="card-title text-white">Add Data</h4>
                                            <a class="heading-elements-toggle"><i
                                                    class="la la-ellipsis-v font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card-content collapse hide">
                                        <div class="card-body card-dashboard">

                                            <form class="form form-horizontal" action="<?php echo e(route('backsite.dosen.store')); ?>"
                                                method="POST" enctype="multipart/form-data">

                                                <?php echo csrf_field(); ?>

                                                <div class="form-body">
                                                    <div class="form-section">
                                                        <p>Please complete the input <code>required</code>, before you click the
                                                            submit button.</p>
                                                    </div>

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
                                                                    <option value="<?php echo e($user_item->id); ?>"><?php echo e($user_item->name); ?>

                                                                    </option>
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
                                                                class="form-control" placeholder="example john doe or jane doe"
                                                                value="<?php echo e(old('name')); ?>" autocomplete="off" required>

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
                                                                value="<?php echo e(old('nik_nip')); ?>" autocomplete="off" required>

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
                                                                value="<?php echo e(old('birth_place')); ?>" autocomplete="off" required>

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
                                                                class="form-control" value="<?php echo e(old('birth_date')); ?>"
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
                                                                <option value="<?php echo e(''); ?>" disabled selected>Choose
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
                                                                class="form-control" value="<?php echo e(old('contact')); ?>"
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
                                                                class="form-control" value="<?php echo e(old('address')); ?>"
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
                                                                <option value="<?php echo e(''); ?>" disabled selected>Choose
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
            <?php endif; ?>

            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dosen_table')): ?>
                <div class="content-body">
                    <section id="table-home">
                        <!-- Zero configuration table -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Dosen List</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">

                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped table-bordered text-inputs-searching default-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Photo</th>
                                                            <th style="text-align:center; width:150px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dosen_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr data-entry-id="<?php echo e($dosen_item->id); ?>">
                                                                <td><?php echo e(isset($dosen_item->created_at) ? date('d/m/Y H:i:s', strtotime($dosen_item->created_at)) : ''); ?>

                                                                </td>
                                                                <td><?php echo e($dosen_item->name ?? ''); ?></td>
                                                                <td><?php echo e($dosen_item->position->name ?? ''); ?></td>
                                                                <td><a data-fancybox="gallery"
                                                                        data-src="<?php echo e(request()->getSchemeAndHttpHost() . '/storage' . '/' . $dosen_item->photo); ?>"
                                                                        class="blue accent-4">Show</a></td>
                                                                <td class="text-center">

                                                                    <div class="btn-group mr-1 mb-1">
                                                                        <button type="button"
                                                                            class="btn btn-info btn-sm dropdown-toggle"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">Action</button>
                                                                        <div class="dropdown-menu">

                                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dosen_show')): ?>
                                                                                <a href="#mymodal"
                                                                                    data-remote="<?php echo e(route('backsite.dosen.show', $dosen_item->id)); ?>"
                                                                                    data-toggle="modal" data-target="#mymodal"
                                                                                    data-title="Dosen Detail"
                                                                                    class="dropdown-item">
                                                                                    Show
                                                                                </a>
                                                                            <?php endif; ?>

                                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dosen_edit')): ?>
                                                                                <a class="dropdown-item"
                                                                                    href="<?php echo e(route('backsite.dosen.edit', $dosen_item->id)); ?>">
                                                                                    Edit
                                                                                </a>
                                                                            <?php endif; ?>

                                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dosen_delete')): ?>
                                                                                <form
                                                                                    action="<?php echo e(route('backsite.dosen.destroy', $dosen_item->id)); ?>"
                                                                                    method="POST"
                                                                                    onsubmit="return confirm('Are you sure want to delete this data ?');">
                                                                                    <input type="hidden" name="_method"
                                                                                        value="DELETE">
                                                                                    <input type="hidden" name="_token"
                                                                                        value="<?php echo e(csrf_token()); ?>">
                                                                                    <input type="submit" class="dropdown-item"
                                                                                        value="Delete">
                                                                                </form>
                                                                            <?php endif; ?>

                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            
                                                        <?php endif; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Photo</th>
                                                            <th style="text-align:center; width:150px;">Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <!-- END: Content-->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-style'); ?>
    <link rel="stylesheet" href="<?php echo e(url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css')); ?>">

    <style>
        .label {
            cursor: pointer;
        }

        .img-container img {
            max-width: 100%;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-script'); ?>
    
    <script src="<?php echo e(asset('/assets/backsite/third-party/inputmask/dist/jquery.inputmask.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/backsite/third-party/inputmask/dist/inputmask.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/backsite/third-party/inputmask/dist/bindings/inputmask.binding.js')); ?>"></script>

    <script src="<?php echo e(url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js')); ?>" type="text/javascript">
    </script>

    <script>
        jQuery(document).ready(function($) {
            $('#mymodal').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget);
                var modal = $(this);

                modal.find('.modal-body').load(button.data("remote"));
                modal.find('.modal-title').html(button.data("title"));
            });

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

        $('.default-table').DataTable({
            "order": [],
            "paging": true,
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            "pageLength": 10
        });

        $(function() {
            $(":input").inputmask();
        });

        // fancybox
        Fancybox.bind('[data-fancybox="gallery"]', {
            infinite: false
        });
    </script>

    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button class="btn close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-spinner fa spin"></i>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/operational/dosen/index.blade.php ENDPATH**/ ?>