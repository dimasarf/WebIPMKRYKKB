@extends('layouts.template')
@section('logo')
  <img src="Logo2.png" class=""alt="" width="55px">
@endsection

@section('logoDashboard')
  <img src="dashboard.png" alt="" class="img-rounded" width="20px">
@endsection

@section('logoAnggota')
  <img src="anggota.png" alt="" class="img-rounded" width="30px">
@endsection

@section('logoPengurus')
  <img src="pengurus.png" alt="" class="img-rounded" width="30px">
@endsection

@section('logoPersentase')
  <img src="stats.png" alt="" class="img-rounded" width="30px">
@endsection

@section('breadcrumb')
  <li class="active">Dashboard</li>
@endsection

@section('breadcrumb')
    <li class="active">Dashboard/Pengurus</li>
@endsection

@section('content')
  <div class="card">
    <div class="card-header main-color-bg">
      <span class="mr-1"><img src="clock.png" alt="" class="img-rounded" width="30px"> </span>  Data Pengurus
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{{route('export.pengurus')}}" class="btn btn-primary ">Export to excel</a>
    </div>
    <div class="card-block mb-4">
      <div class="table-responsive">
  <table class="table">
  <thead>
  <tr>
    <th>ID</th>
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
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($pengurus as $anggotA)
    <tr>
      <td value="{{$anggotA->id}}">{{$anggotA->id}}</td>
      <td>{{$anggotA->namaLengkap}}</td>
      <td>{{$anggotA->tanggalLahir}}</td>
      <td>{{$anggotA->jenisKelamin}}</td>
      <td>{{$anggotA->alamatJogja}}</td>
      <td>{{$anggotA->alamatBatam}}</td>
      <td>{{$anggotA->universitas}}</td>
      <td>{{$anggotA->jurusan}}</td>
      <td>{{$anggotA->angkatan}}</td>
      <td>{{$anggotA->idLine}}</td>
      <td>{{$anggotA->keanggotaan}}</td>
      <td><button type="button" class="btn btn-danger">Aksi</button></td>
    </tr>

  @endforeach

  </tbody>
  </table>

  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="offset-lg-5 col-lg-4">
          {{$pengurus->links()}}

      </div>
    </div>
    <div class="row">
      <div class="offset-lg-5 col-lg-4">

      </div>
    </div>
  </div>

  </div>
  </div>
@endsection
