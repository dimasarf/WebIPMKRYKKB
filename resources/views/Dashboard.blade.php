@extends('layouts.template')



@section('content')
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
              <h2><span><img src="seluruh.png" alt="" class="img-rounded center-block" width="50px"></span> {{$anggota}}</h2>
              <h4 class="ml-4">Anggota</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-block-2">
            <div class="card-block  ml-5 mt-4 mb-4 " >
              <h2><span><img src="pengurus.png" alt="" class="img-rounded center-block" width="50px"></span> {{$pengurus}}</h2>
              <h4 class="ml-2">Pengurus</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-block-2">
            <div class="card-block ml-5 mt-4 mb-4">
              <h2><span><img src="anggota.png" alt="" class="img-rounded center-block" width="50px"></span> {{$anggotaBiasa}}</h2>
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
@foreach ($anggotas as $anggotA)
  <tr>
    <td>{{$anggotA->namaLengkap}}</td>
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
  </tr>

@endforeach

</tbody>
</table>

</div>
<br>


</div>
</div>
@endsection
