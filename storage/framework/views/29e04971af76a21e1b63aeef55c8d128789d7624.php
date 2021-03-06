<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body style="background-color:#2d3436" style="width:400px;">
    <div class="container" >
      <div class="row  mt-4 mr-4 ml-4 mb-4">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                  <img src="Logo.jpg" alt="" class="mx-auto d-block" width="150px">
              </div>

              <div class="modal-body">
                <h4 class="text-center">Registrasi Pengurus IPMKRY-KKB</h4>
                <br>

                <form method="POST" action="<?php echo e(url('/registrasi-pengurus')); ?>">
                    <?php echo e(csrf_field()); ?>

                  <fieldset>
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
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
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

            </div>
          </div>
        </div>


      </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
  </body>
</html>
