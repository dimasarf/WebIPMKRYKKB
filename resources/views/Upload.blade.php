<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/upload" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      Selec image to upload
      <input type="file" name="file[]" id="file">
      <input type="submit" class="btn btn-primary" value="Upload">Submit</input>
    </form>
  </body>
</html>
