<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td><?php echo e(isset($user->name) ? $user->name : 'N/A'); ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo e(isset($user->email) ? $user->email : 'N/A'); ?></td>
    </tr>
    <tr>
        <th>Role</th>
        <td>
            <?php $__currentLoopData = $user->role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="badge bg-yellow text-dark mr-1 mb-1"><?php echo e(isset($role->name) ? $role->name : 'N/A'); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>
    </tr>
    <tr>
        <th>Type User</th>
        <td>
            <span class="badge bg-success mr-1 mb-1"><?php echo e(isset($user->detail_user->type_user->name) ? $user->detail_user->type_user->name : 'N/A'); ?></span>
        </td>
    </tr>
</table>
<?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/management-access/user/show.blade.php ENDPATH**/ ?>