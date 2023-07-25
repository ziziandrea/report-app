<?php $__currentLoopData = $laporanGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $created_at => $laporans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table class="table table-bordered">
        <tr>
            <th>Nama Dosen</th>
            <td><?php echo e(isset($laporan->dosen->name) ? $laporan->dosen->name : 'N/A'); ?></td>
        </tr>
        <tr>
            <th>Nama Kelas</th>
            <td><?php echo e(isset($laporan->kelas->name) ? $laporan->kelas->name : 'N/A'); ?></td>
        </tr>
        <?php $__currentLoopData = $laporans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>Agenda</th>
                <td><?php echo e(isset($item->agenda) ? $item->agenda : 'N/A'); ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?php echo e(isset($item->deskripsi) ? $item->deskripsi : 'N/A'); ?></td>
            </tr>
            <tr>
                <th>Tindakan</th>
                <td><?php echo e(isset($item->tindakan) ? $item->tindakan : 'N/A'); ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/operational/laporan/show.blade.php ENDPATH**/ ?>