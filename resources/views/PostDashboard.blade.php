@extends('layouts.template')
@section('sidenav')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="col-lg-3">
    <div class="list-group">
      <a href="/Dashboard-Postingan" class="list-group-item active main-color-bg">
        <span><img src="dashboard.png" alt="" class="img-rounded" width="20px"></span> Dashboard
      </a>
        <a href="/post-berita" id="linkk" class="list-group-item list-group-item-action"><span><i class="fa fa-plus" style="font-size:25px;color:#1abc9c"></i></span> Postingan Baru</a>
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
@endsection


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
              <h2><span><img src="seluruh.png" alt="" class="img-rounded center-block" width="50px"></span> {{$totalKonten}}</h2>
              <h4 class="ml-4">Total Postingan</h4>
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
  <th>Judul</th>
  <th>Waktu diunggah</th>
  <th>Waktu disunting</th>
  <th>Aksi</th>
</tr>
</thead>
<tbody>
  @foreach ($kontens as $konten)
  <tr>

      <td>{{$konten->judul}}</td>
      <td>{{$konten->created_at}}</td>
      <td>{{$konten->updated_at}}</td>
      <td><button type="button" class="btn btn-primary">Sunting</button></td>
  </tr>
  @endforeach


</tbody>
</table>

</div>
<br>


</div>
<div class="container">
  <div class="row">
    <div class="offset-lg-5 col-lg-4">
      {{$kontens->links()}}
    </div>
  </div>
  <div class="row">
    <div class="offset-lg-5 col-lg-4">

    </div>
  </div>
</div>
</div>

@endsection
