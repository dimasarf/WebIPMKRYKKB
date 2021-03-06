@extends('layouts.template')
@section('sidenav')
  <div class="col-lg-3">
    <div class="list-group">
      <a href="/Dashboard" class="list-group-item active main-color-bg">
        <span><img src="dashboard.png" alt="" class="img-rounded" width="20px"></span> Dashboard
      </a>
        <a href="{{route('dashboard.anggotaBiasa')}}" id="linkk" class="list-group-item list-group-item-action"><span><img src="anggota.png" alt="" class="img-rounded" width="30px"></span> Anggota</a>

      <a href="{{route('dashboard.pengurus')}}" class="list-group-item list-group-item-action"><span><img src="pengurus.png" alt="" class="img-rounded" width="30px"></span> Pengurus</a>
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
    var pengurus = @json($persentasePengurus);
    var anggotaBiasa = @json($persentaseAnggotaBiasa);
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
@endsection

@section('breadcrumb')
    <li class="active">Dashboard/Anggota-Biasa</li>
@endsection

@section('content')
  <div class="card">
    <div class="card-header main-color-bg">
      <span class="mr-1"><img src="clock.png" alt="" class="img-rounded" width="30px"> </span>  Data Pengurus
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{{route('export.pengurus')}}" class="btn btn-primary float-center">Export to excel</a>
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
  @foreach ($anggota as $anggotA)
    <tr id="baris">
      <input type="hidden" name="" value="{{$anggotA->id}}" id="idAnggota">
      <td value="{{$anggotA->id}}">{{$anggotA->id}}</td>
      <td class="namaLengkap">{{$anggotA->namaLengkap}}</td>
      <td>{{$anggotA->tanggalLahir}}</td>
      <td>{{$anggotA->tempatLahir}}</td>
      <td>{{$anggotA->jenisKelamin}}</td>
      <td>{{$anggotA->alamatJogja}}</td>
      <td>{{$anggotA->alamatBatam}}</td>
      <td>{{$anggotA->universitas}}</td>
      <td>{{$anggotA->jurusan}}</td>
      <td>{{$anggotA->angkatan}}</td>
      <td>{{$anggotA->asalSekolah}}</td>
      <td>{{$anggotA->idLine}}</td>
      <td>{{$anggotA->keanggotaan}}</td>
      <td>{{$anggotA->agama}}</td>
      <td>{{$anggotA->noPribadi}}</td>
      <td>{{$anggotA->noOrtu}}</td>
      <td>{{$anggotA->sumberInformasi}}</td>
      <td><button type="button" class="btn btn-danger hapus" data-dismiss="modal" id="delete">Hapus</button></td>
    </tr>

  @endforeach

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
            {{ csrf_field() }}
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
        @if (count($errors)>0)
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">
                {{$error}}
              </div>
            @endforeach
        @endif
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
          {{$anggota->links()}}
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

  <script src="{{url('js/bootstrap.min.js')}}"></script>
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
@endsection
