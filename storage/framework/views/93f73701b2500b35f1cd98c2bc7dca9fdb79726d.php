<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body style="background-color:#2d3436">
     <div class="container-fluid" >
      <div class="row d-flex h-1000">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                  <img src="Logo.jpg" alt="" class="mx-auto d-block" width="150px">
              </div>

              <div class="modal-body">
                <h4 class="text-center">Registrasi Anggota KPMKRY-KKB</h4>
                <br>

                <form method="POST" action="/registrasi-anggota">
                    <?php echo e(csrf_field()); ?>

                  <fieldset>
                    <div id="biodata">
                     <div class="form-group">
                      <label for="NamaLengkap" class="control-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
                    </div>

                    <div class="form-group">
                      <label for="agama" class="control-label">Tempat Lahir</label>
                      <input type="text" class="form-control" id="agama" name="tempatLahir">
                    </div>

                    <div class="form-group">
                      <label for="TTL" class="control-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggalLahir" placeholder="dd/mm/yyyy" name="tanggalLahir">
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
                      <textarea class="form-control" name="alamatBatam" id="alamatJogja"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Universitas" class="control-label">Id Line</label>
                      <input type="text" class="form-control" id="idLine" name="idLine">
                    </div>

                    <div class="form-group">
                      <label for="agama" class="control-label">Agama</label>
                      <input type="text" class="form-control" id="agama" name="agama">
                    </div>

                    <div class="form-group">
                      <label for="Universitas" class="control-label">Nomor HP Pribadi</label>
                      <input type="text" class="form-control" id="noPribadi" name="noPribadi">
                    </div>

                    <div class="form-group">
                      <label for="Universitas" class="control-label">Nomor HP Orangtua</label>
                      <input type="text" class="form-control" id="noOrtu" name="noOrtu">
                    </div>
                  </div>

                  <div id="lain2">
                     <div class="form-group">
                      <label for="Universitas" class="control-label">Asal Sekolah</label>
                      <input type="text" class="form-control" id="universitas" name="asalSekolah">
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
                        <label for="Universitas" class="control-label">Saya mengetahui informasi mengenai KPMKRY-KKB dari:</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sumberInformasi" id="teman" value="Teman" checked>
                            Teman
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sumberInformasi" id="sosialisasi" value="Sosialisasi">
                            Sosialisasi
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sumberInformasi" id="Media" value="Media Sosial">
                            Media Sosial
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sumberInformasi" id="alumni" value="Alumni">
                            Alumni
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <div class="form-inline">
                            </div>
                            <input type="radio" class="form-check-input" name="sumberInformasi" id="lainnya" onclick="javascript:yesnoCheck()">
                            Lainnya
                          </label>
                          <div class="" id="ifSelected" style="display:none">

                          </div>

                        </div>
                      </div>
                  </div>
                    <button type="button" class="btn btn-primary btn-block" id="next">Next</button>
                    <button type="button" class="btn btn-danger btn-block" id="back">Back</button>
                    <button type="submit" class="btn btn-primary btn-block" id="submit">Submit</button>
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
                <div class="col-lg-12">
                  <p class="text-center hakCipta">© 2018 KPMKRY-KKB</p>
                </div>
              </div>
          </div>
        </div>


      </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
      var x = document.getElementById("biodata");
      var y = document.getElementById("lain2");
      var z = document.getElementById("submit");
      var w = document.getElementById("next");
      var wd = document.getElementById("back");
      var inf = document.getElementById("ifSelected");
      var lain = document.getElementById("lainnya");
      $(document).ready(function() {
        if(x.style.display != "none")
        {
          y.style.display = "none";
          z.style.display = "none";
          wd.style.display = "none";
        }
        $('#next').click(function(event) {
          wd.style.display = "block";
          x.style.display = "none";
          w.style.display = "none";
          y.style.display = "block";
          z.style.display = "block";
        });

        $('#back').click(function(event) {
          wd.style.display = "none";
          x.style.display = "block";
          w.style.display = "block";
          y.style.display = "none";
          z.style.display = "none";
        });

      });
      function yesnoCheck() {
        if (lain.checked) {
          inf.style.display = "block";
        } else inf.style.display = "none";
      }
    </script>
  </body>
</html>
