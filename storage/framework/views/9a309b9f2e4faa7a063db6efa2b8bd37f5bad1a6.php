<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <style media="screen">
      .hakCipta {
      font-size: 13px;
      }

    </style>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body style="background-color:#2d3436" style="width:400px;">
    <div class="container" >
      <div class="row  mt-4 mr-4 ml-4 mb-4">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                  <img src="Logo.jpg" alt="" class="mx-auto d-block" width="150px;">
              </div>

              <div class="modal-body">
                <h3 class="text-center">Terima kasih. Data anda sudah kami simpan</h3>
              </div>
              <div class="modal-footer">
                <div class="col-lg-12">
                  <p class="text-center hakCipta">© 2018 IPMKRY-KKB</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
      $('#tutup').click(function(event) {
        window.close();
      });
    </script>
  </body>
</html>
