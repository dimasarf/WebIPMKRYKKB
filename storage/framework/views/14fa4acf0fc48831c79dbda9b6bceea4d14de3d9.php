<?php $__env->startSection('sidenav'); ?>
  <div class="col-lg-3">
    <div class="list-group">
      <a href="/Dashboard" class="list-group-item active main-color-bg">
        <span><img src="dashboard.png" alt="" class="img-rounded" width="20px"></span> Dashboard
      </a>
        <a href="<?php echo e(route('dashboard.anggotaBiasa')); ?>" id="linkk" class="list-group-item list-group-item-action"><span><img src="anggota.png" alt="" class="img-rounded" width="30px"></span> Anggota</a>

      <a href="<?php echo e(route('dashboard.pengurus')); ?>" class="list-group-item list-group-item-action"><span><img src="pengurus.png" alt="" class="img-rounded" width="30px"></span> Pengurus</a>
    </div>
    <br>
    <div class="card">
      <div class="card-header main-color-bg">
        <span><img src="stats.png" alt="" class="img-rounded" width="30px"></span> Persentase
      </div>
      <div class="card-block">
          <canvas id="canvas" width="300" height="300"></canvas>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var chart = document.getElementById('canvas').getContext('2d');
    var pengurus = <?php echo json_encode($persentasePengurus, 15, 512) ?>;
    var anggotaBiasa = <?php echo json_encode($persentaseAnggotaBiasa, 15, 512) ?>;
    var myChart = new Chart(chart,{
      type: 'doughnut',
      data :{
        labels:['Pengurus','Anggota'],
        datasets:[{
          label : 'Jumlah',
          data :[
              pengurus , anggotaBiasa
          ],
          backgroundColor:[
            '#f39c12','#1abc9c'
          ]
        }]
      },
      option:{}
    });
    $(document).ready(function () {
      $('#linkk').click(function () {
        $.get('/Dashboard/Anggota-Biasa', function(data){
          $('#kontent').append(data);
        });
      });
    });
  </script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-header main-color-bg">
      <span><img src="bintang.png" alt="" class="img-rounded" width="30px"></span> Featured
    </div>
    <div class="card-block">
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-block-2">
            <div class="card-block ml-5 mt-4 mb-4">
              <h2><span><img src="seluruh.png" alt="" class="img-rounded center-block" width="50px"></span> <?php echo e($anggota); ?></h2>
              <h4 class="ml-4">Anggota</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-block-2">
            <div class="card-block  ml-5 mt-4 mb-4 " >
              <h2><span><img src="pengurus.png" alt="" class="img-rounded center-block" width="50px"></span> <?php echo e($pengurus); ?></h2>
              <h4 class="ml-2">Pengurus</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-block-2">
            <div class="card-block ml-5 mt-4 mb-4">
              <h2><span><img src="anggota.png" alt="" class="img-rounded center-block" width="50px"></span> <?php echo e($anggotaBiasa); ?></h2>
              <h4>Anggota Biasa</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<div class="card">
  <div class="card-header main-color-bg">
    <span class="mr-1"><img src="clock.png" alt="" class="img-rounded" width="30px"> </span>  Anggota Terbaru
  </div>
  <div class="card-block mb-4">
    <div class="table-responsive">
<table class="table">
<thead>
<tr>
  <th>Nama Lengkap</th>
  <th>Tanggal Lahir</th>
  <th>Tempat Lahir</th>
  <th>Jenis Kelamin</th>
  <th>Alamat Jogja</th>
  <th>Alamat Batam</th>
  <th>Universitas</th>
  <th>Jurusan</th>
  <th>Angkatan</th>
  <th>Asal Sekolah</th>
  <th>Id Line</th>
  <th>Keanggotaan</th>
  <th>Agama</th>
  <th>Nomor Hp Pribadi</th>
  <th>Nomor HP Orangtua</th>
  <th>Sumber Informasi</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $anggotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggotA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($anggotA->namaLengkap); ?></td>
    <td><?php echo e($anggotA->tanggalLahir); ?></td>
    <td><?php echo e($anggotA->tempatLahir); ?></td>
    <td><?php echo e($anggotA->jenisKelamin); ?></td>
    <td><?php echo e($anggotA->alamatJogja); ?></td>
    <td><?php echo e($anggotA->alamatBatam); ?></td>
    <td><?php echo e($anggotA->universitas); ?></td>
    <td><?php echo e($anggotA->jurusan); ?></td>
    <td><?php echo e($anggotA->angkatan); ?></td>
    <td><?php echo e($anggotA->asalSekolah); ?></td>
    <td><?php echo e($anggotA->idLine); ?></td>
    <td><?php echo e($anggotA->keanggotaan); ?></td>
    <td><?php echo e($anggotA->agama); ?></td>
    <td><?php echo e($anggotA->noPribadi); ?></td>
    <td><?php echo e($anggotA->noOrtu); ?></td>
    <td><?php echo e($anggotA->sumberInformasi); ?></td>
  </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>

</div>
<br>


</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>