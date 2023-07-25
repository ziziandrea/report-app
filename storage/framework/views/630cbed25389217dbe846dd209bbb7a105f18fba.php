<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan PDF</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add any custom styling for your PDF here */
        body {
            font-size: 12px;
        }

        table {
            font-size: 12px;
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table td,
        table th {
            padding: 6px;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <?php $__currentLoopData = $laporanGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $created_at => $laporans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <center>
            <h1>TEKNIK INFORMATIKA</h1>
        </center>
        <hr>
        <p>Kelas : <?php echo e($laporan->kelas->name); ?></p>
        <p>Dosen : <?php echo e($laporan->dosen->name); ?></p>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Agenda</th>
                    <th>Deskripsi</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $laporans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->agenda); ?></td>
                        <td><?php echo e($item->deskripsi); ?></td>
                        <td><?php echo e($item->tindakan); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <!-- <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lampiran</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $laporans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><img src="<?php echo e(asset('storage/file-laporan/' . $item->lampiran)); ?>" alt="Lampiran">
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table> -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\report-app-main\resources\views/pages/operational/laporan/pdf.blade.php ENDPATH**/ ?>