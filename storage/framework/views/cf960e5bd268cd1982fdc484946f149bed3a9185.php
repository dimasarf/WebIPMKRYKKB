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
<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Dashboard/Anggota-Biasa</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-header main-color-bg">
      <span class="mr-1"><img src="clock.png" alt="" class="img-rounded" width="30px"> </span>  Data Anggota Biasa
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="<?php echo e(route('export.anggotaBiasa')); ?>" class="btn btn-primary float-center">Export to excel</a>
    </div>
    <div class="card-block mb-4" >
      <div class="table-responsive" >
  <table class="table" id="tabel">
  <thead>
  <tr>
    <th>ID</th>
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
  <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggotA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr id="baris">
      <input type="hidden" name="" value="<?php echo e($anggotA->id); ?>" id="idAnggota">
      <td value="<?php echo e($anggotA->id); ?>"><?php echo e($anggotA->id); ?></td>
      <td class="namaLengkap"><?php echo e($anggotA->namaLengkap); ?></td>
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
      <td><button type="button" class="btn btn-danger hapus" data-dismiss="modal" id="delete">Hapus</button></td>
    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
  </table>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/edit-anggota" id="form">
            <?php echo e(csrf_field()); ?>

          <fieldset>
            <input type="hidden" name="" value="" id="iD">
            <div class="form-group">
              <label for="NamaLengkap" class="control-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
            </div>

            <div class="form-group">
              <label for="TTL" class="control-label">Tanggal Lahir</label>
              <input type="text" class="form-control" id="tanggalLahir" placeholder="dd/mm/yyyy" name="tanggalLahir">
            </div>

            <label for="message-text" class="control-label">Jenis Kelamin</label>

            <div class="form-group mr-1">
                <label class="radio-inline">
                  <input type="radio" id="lakiLaki" name="jenisKelamin" value="laki-laki"> Laki-Laki
                </label>
                <label class="radio-inline offset-1">
                  <input type="radio" id="perempuan" name="jenisKelamin" value="perempuan"> Perempuan
                </label>
            </div>

            <div class="form-group">
              <label for="alamatJogja" class="control-label">Alamat di Yogyakarta</label>
              <textarea class="form-control" name="alamatJogja" id="alamatJogja"></textarea>
            </div>

            <div class="form-group">
              <label for="alamatBatam" class="control-label">Alamat di Batam</label>
              <textarea class="form-control" name="alamatBatam" id="alamatBatam"></textarea>
            </div>

            <div class="form-group">
              <label for="Universitas" class="control-label">Universitas</label>
              <input type="text" class="form-control" id="universitas" name="universitas">
            </div>

            <div class="form-group">
              <label for="Universitas" class="control-label">Jurusan</label>
              <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>

            <div class="form-group">
              <label for="Universitas" class="control-label">Angkatan</label>
              <input type="text" class="form-control" id="angkatan" name="angkatan">
            </div>

            <div class="form-group">
              <label for="Universitas" class="control-label">Id Line</label>
              <input type="text" class="form-control" id="idLine" name="idLine">
            </div>
          </fieldset>
        </form>
        <br>
        <?php if(count($errors)>0): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="alert alert-danger">
                <?php echo e($error); ?>

              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="offset-lg-5 col-lg-4">
          <?php echo e($anggota->links()); ?>

      </div>
    </div>
    <div class="row">
      <div class="offset-lg-5 col-lg-4">

      </div>
    </div>
  </div>
  <script  src="http://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js" integrity="sha256-N4u5BjTLNwmGul6RgLoESPNqDFVUibVuOYhP4gJgrew=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" integrity="sha256-c0m8xzX5oOBawsnLVpHnU2ieISOvxi584aNElFl2W6M=" crossorigin="anonymous"></script>

  <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript">
   $(document).ready(function(){
     $('.table tbody').on('click','.aksi', function () {
         var currow = $(this).closest('tr');
         var col0 = currow.find('td:eq(0)').text();
         var col1 = currow.find('td:eq(1)').text();
         var col2 = currow.find('td:eq(2)').text();
         var col3 = currow.find('td:eq(3)').text();
         var col4 = currow.find('td:eq(4)').text();
         var col5 = currow.find('td:eq(5)').text();
         var col6 = currow.find('td:eq(6)').text();
         var col7 = currow.find('td:eq(7)').text();
         var col8 = currow.find('td:eq(8)').text();
         var col9 = currow.find('td:eq(9)').text();
         var col10 = currow.find('td:eq(10)').val();
         var result = col10;
         var id = $(this).find('#idAnggota').val();
         $('#iD').val(col0);
         $('#namaLengkap').val(col1);
         $('#tanggalLahir').val(col2);
         $('#alamatJogja').val(col4);
         $('#alamatBatam').val(col5);
         $('#universitas').val(col6);
         $('#jurusan').val(col7);
         $('#angkatan').val(col8);
         $('#idLine').val(col9);
         if(col3 == "perempuan")
         {
           $('#perempuan').prop("checked",true);
         }
         else
         {
           $('#lakiLaki').prop("checked",true);
         }
         console.log(id);
       });
       $('.table tbody').on('click','.hapus', function () {
          var currow = $(this).closest('tr');
          var id = currow.find('td:eq(0)').text();
          console.log(id);
          $.post('delete', {'id':id, '_token':$('input[name=_token]').val()}, function(data) {
              $('#tabel').load(location.href + ' #tabel');
              location.reload();
              //$('#baris').remove();
          });
        });

      $('#simpan').click(function(event) {

          $.ajax({
          url: '/edit-anggota',
          type: 'post',
          data: $('#form').serialize(), /*{
            '_token': $('input[name=_token]').val(),
            'id' : $("#iD").val(),
            'tanggalLahir' : $('#tanggalLahir').val(),
            'alamatJogja' : $('#tanggalLahir').val(),
            'alamatBatam' : $('#alamatBatam').val(),
            'universitas' : $('#universitas').val(),
            'jurusan' : $('#jurusan').val(),
            'angkatan' : $('#angkatan').val(),
            'idLine' : $('#idLine').val()
          },*/
          success: function(data) {
               console.log("Suksess cukk");
           }
        });



        /*var id = $("#iD").val();
        var namaLengkap = $('#namaLengkap').val();
        console.log(namaLengkap);
        var tanggalLahir = $('#tanggalLahir').val();
        console.log(tanggalLahir);
        var alamatJogja = $('#alamatJogja').val();
        console.log(alamatJogja);
        var alamatBatam = $('#alamatBatam').val();
        console.log(alamatBatam);
        var universitas = $('#universitas').val();
        console.log(universitas);
        var jurusan = $('#jurusan').val();
        console.log(jurusan);
        var angkatan = $('#angkatan').val();
        console.log(angkatan);
        var idLine = $('#idLine').val();
        console.log(idLine);
        $.post('edit-anggota', {'id':id, '_token':$('input[name=_token]').val()}, function(data) {
          $('#tabel').load(location.href + ' #tabel');
          console.log(data);
        });*/
      });

       });

  </script>


  <script type="text/javascript">

  </script>
  </div>
  </div>
<?php $__env->stopSection(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js" integrity="sha256-N4u5BjTLNwmGul6RgLoESPNqDFVUibVuOYhP4gJgrew=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" integrity="sha256-c0m8xzX5oOBawsnLVpHnU2ieISOvxi584aNElFl2W6M=" crossorigin="anonymous"></script>

<script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>