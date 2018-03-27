<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="/bikin-album">
      <?php echo e(csrf_field()); ?>

      <input type="text" name="nama" value="">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>
