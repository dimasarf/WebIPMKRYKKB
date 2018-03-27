@extends('layouts.template')
@section('sidenav')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="col-lg-3">
    <div class="list-group">
      <div class="list-group">
        <a href="/Dashboard-Postingan" class="list-group-item active main-color-bg">
          <span><img src="dashboard.png" alt="" class="img-rounded" width="20px"></span> Dashboard
        </a>

      </div>
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
  <script  src="http://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <div class="card">
    <div class="card-header main-color-bg">
      <span class="mr-1"><img src="clock.png" alt="" class="img-rounded" width="30px"> </span>  Postingan Baru
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </div>
    <div class="card-block mb-4" >
      <form action="/post-berita" method="POST" class=" mx-auto">
          {{ csrf_field() }}
          <div class="col-lg-12">
            <fieldset class="form-group mt-1">
              <label for="exampleInputEmail1">Judul</label>
              <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
            </fieldset>
            <textarea name="summernoteInput" class="summernote" id="summernote"></textarea>
            <br>
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
      </form>
    </div>
  </div>

  </div>
  <script>
      $('#summernote').summernote({

      });
    </script>
@endsection
