<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Dashboard/Pengurus</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-header main-color-bg">
      <span class="mr-1"><img src="clock.png" alt="" class="img-rounded" width="30px"> </span>  Hasil
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="<?php echo e(route('export.pengurus')); ?>" class="btn btn-primary ">Export to excel</a>
    </div>
    <div class="card-block mb-4">
      <div class="table-responsive">
  <table class="table">
  <thead>
  <tr>
    <th>Nama Lengkap</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Alamat Jogja</th>
    <th>Alamat Batam</th>
    <th>Universitas</th>
    <th>Jurusan</th>
    <th>Angkatan</th>
    <th>Id Line</th>
    <th>Keanggotaan</th>
    <th>Keanggotaan</th>
  </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggotA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($anggotA->namaLengkap); ?></td>
      <td><?php echo e($anggotA->tanggalLahir); ?></td>
      <td><?php echo e($anggotA->jenisKelamin); ?></td>
      <td><?php echo e($anggotA->alamatJogja); ?></td>
      <td><?php echo e($anggotA->alamatBatam); ?></td>
      <td><?php echo e($anggotA->universitas); ?></td>
      <td><?php echo e($anggotA->jurusan); ?></td>
      <td><?php echo e($anggotA->angkatan); ?></td>
      <td><?php echo e($anggotA->idLine); ?></td>
      <td><?php echo e($anggotA->keanggotaan); ?></td>
      <td><button type="button" class="btn btn-primary">Aksi</button></td>
    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
  </table>

  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="offset-lg-5 col-lg-4">


      </div>
    </div>
    <div class="row">
      <div class="offset-lg-5 col-lg-4">

      </div>
    </div>
  </div>

  </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>