<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-default">
      <a class="navbar-brand" href="#">Humas IPMKRY-KKB</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/Dashboard">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Dashboard-Postingan">Postingan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Dashboard-Galeri">Galeri</a>
        </li>
      </ul>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">

    </ul>
    <?php if(auth()->guard()->guest()): ?>
      <script type="text/javascript">
  window.location = "<?php echo e(url('/login')); ?>";//here double curly bracket
</script>
    <?php else: ?>
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome, <?php echo e(Auth::user()->name); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Logout</a>
                   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                       <?php echo e(csrf_field()); ?>

                   </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        </li>
      </ul>
    <?php endif; ?>

    </div>
  </nav>
  <header id="header" class="">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 ">
            <h3 class=""><span><img src="/Logo2.png" class=""alt="" width="55px"></span> Dashboard </h3>
        </div>
        <div class="col-lg-6">

          <form class="form col-lg-9" method="get" action="<?php echo e(route('dashboard.search')); ?>">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari berdasarkan nama..." name="keyWord">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Cari!</button>
              </span>
            </div>

          </form>
        </div>

      </div>
    </div>
  </header>

  <section id="breadcrumb">
    <div class="container ">
      <ol class="breadcrumb mr-5">
        <?php echo $__env->yieldContent('breadcrumb'); ?>
      </ol>
      <div class="col-lg-12"id="tess">

      </div>

    </div>
  </section>

  <section>


    <div class="container ml-5">
      <div class="row">
          <?php echo $__env->yieldContent('sidenav'); ?>

        <div class="col-lg-9" id="kontent">
          <?php echo $__env->yieldContent('content'); ?>

        </div>

      </div>
      </div>
    </div>
  </section>
    </div>
    <script  src="http://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


  </body>


</html>
