@extends('layouts.template')
@section('content')

  <div class="container">
    <div class="row">
      @foreach ($fotos as $foto)
        <div class="col-lg-4">
          <div class="card mb-1">
           <div class="card-header main-color-bg">
             <span><img src="stats.png" alt="" class="img-rounded" width="30px"></span> Image
           </div>
           <div class="card-block">
               <img src="{{ URL::asset('uploads/'.$foto->foto) }}" alt="" class="card-img-top">
           </div>
           <div class="card-body">
             <input type="hidden" name="_method" value="DELETE">
             <!-- Or use the helper function to do it for you -->

             <p>{{$foto->foto}}</p>
             <p>{{$foto->created_at}}</p>
             <form action="{{action('UploadController@deleteFoto', $foto->id)}}" method="post">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input name="_method" type="hidden" value="DELETE">
               <button type="submit" class="btn btn-danger">Delete</button>
             </form>
            {{-- <a href="/Delete-Foto/{{$foto->idfoto}}" class="btn btn-danger">Delete</a> --}}
           </div>
         </div>
        </div>
      @endforeach
    </div>
  </div>
  <script type="text/javascript">
    function hapus() {
      var id = $('#id').val();
      console.log(id);
      $.post('delete', {'id':id, '_token':$('input[name=_token]').val()}, function(data) {
          location.reload();
      });
    }
  </script>
@endsection
