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
        <div class="col-lg-10 ">
            <h3 class=""><span><img src="Logo2.png" class=""alt="" width="55px"></span> Dashboard </h3>
        </div>
        <div class="col-lg-2">
          <div class="dropdown float-right ml-auto">
        <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Aksi
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Tambahkan Anggota</a>
        <a class="dropdown-item" href="#">Edit Anggota</a>
        <a class="dropdown-item" href="#">Hapus Anggota</a>
        </div>
        </div>
        </div>
      </div>
    </div>
  </header>

  <section id="breadcrumb">
    <div class="container ">
      <ol class="breadcrumb mr-5">
        <?php echo $__env->yieldContent('breadcrumb'); ?>
      </ol>
      <div class="col-lg-12">

      </div>

    </div>
  </section>

  <section>
    <div class="container ml-5">
      <div class="row">
        <div class="col-lg-3">
          <div class="list-group">
            <a href="/Dashboard" class="list-group-item active main-color-bg">
              <span><img src="dashboard.png" alt="" class="img-rounded" width="20px"></span> Dashboard
            </a>
              <a href="/Dashboard/Anggota-Biasa" class="list-group-item list-group-item-action"><span><img src="anggota.png" alt="" class="img-rounded" width="30px"></span> Anggota</a>
            <a href="/Dashboard/Pengurus" class="list-group-item list-group-item-action"><span><img src="pengurus.png" alt="" class="img-rounded" width="30px"></span> Pengurus</a>
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
        <div class="col-lg-9">
          <?php echo $__env->yieldContent('content'); ?>

        </div>
      </div>
      </div>
    </div>
  </section>
    </div>
    <script  src="http://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js" integrity="sha256-N4u5BjTLNwmGul6RgLoESPNqDFVUibVuOYhP4gJgrew=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" integrity="sha256-c0m8xzX5oOBawsnLVpHnU2ieISOvxi584aNElFl2W6M=" crossorigin="anonymous"></script>

    <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
    <script>
      var chart = document.getElementById('canvas').getContext('2d');
      var pengurus = <?php echo json_encode($persentasePengurus, 15, 512) ?>;
      var anggotaBiasa = <?php echo json_encode($persentaseAnggotaBiasa, 15, 512) ?>;
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
    </script>
  </body>


</html>
