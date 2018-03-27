<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tes input content</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  </head>
  <body>
    <form action="/berita" method="POST">
        {{ csrf_field() }}
        <textarea name="summernoteInput" class="summernote"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>


  

    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
      </script>

  </body>
</html>
