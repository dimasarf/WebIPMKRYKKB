<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <base href="{{URL::asset('/')}}" target="_blank">
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
                <h4 class="text-center">Registrasi Anggota IPMKRY-KKB</h4>
                <br>
                <form>
                  <div class="form-group">
                    <label for="NamaLengkap" class="control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="NamaLengkap">
                  </div>

                  <div class="form-group">
                    <label for="TTL" class="control-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="TTL" placeholder="dd/mm/yyyy">
                  </div>

                  <div class="form-group">
                    <label for="Universitas" class="control-label">Universitas</label>
                    <input type="text" class="form-control" id="Universitas">
                  </div>

                  <label for="message-text" class="control-label">Jenis Kelamin</label>

                  <div class="form-group mr-1">
                      <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Laki-Laki
                      </label>
                      <label class="radio-inline offset-1">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Perempuan
                      </label>
                  </div>

                  <div class="form-group">
                    <label for="AlamatJogja" class="control-label">Alamat di Yogyakarta</label>
                    <textarea class="form-control" id="AlamatJogja"></textarea>
                  </div>



                </form>
              </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-block">Submit</button>
            </div>
          </div>
        </div>


      </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
  </body>
</html>
