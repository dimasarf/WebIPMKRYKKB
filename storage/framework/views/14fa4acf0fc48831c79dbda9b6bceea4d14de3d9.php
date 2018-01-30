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
  window.location = "{ url('/login') }";//here double curly bracket
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
  <header id="header">

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
        <li class="active">Dashboard</li>
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
            <a href="#" class="list-group-item active main-color-bg">
              <span><img src="dashboard.png" alt="" class="img-rounded" width="20px"></span> Dashboard
            </a>
              <a href="#" class="list-group-item list-group-item-action"><span><img src="anggota.png" alt="" class="img-rounded" width="30px"></span> Anggota</a>
            <a href="#" class="list-group-item list-group-item-action"><span><img src="pengurus.png" alt="" class="img-rounded" width="30px"></span> Pengurus</a>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="card">
            <div class="card-header main-color-bg">
              Featured
            </div>
            <div class="card-block">
            <div class="container mt-4 mb-4">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card card-block-2">
                    <div class="card-block ml-5 mt-4 mb-4">
                      <h2><span><img src="seluruh.png" alt="" class="img-rounded center-block" width="50px"></span> 500</h2>
                      <h4 class="ml-4">Anggota</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-block-2">
                    <div class="card-block  ml-5 mt-4 mb-4 " >
                      <h2><span><img src="pengurus.png" alt="" class="img-rounded center-block" width="50px"></span> 48</h2>
                      <h4 class="ml-2">Pengurus</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-block-2">
                    <div class="card-block ml-5 mt-4 mb-4">
                      <h2><span><img src="anggota.png" alt="" class="img-rounded center-block" width="50px"></span> 432</h2>
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
            Anggota Terbaru
          </div>
          <div class="card-block mb-4">
            <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>City</th>
          <th>Country</th>
          <th>Sex</th>
          <th>Example</th>
          <th>Example</th>
          <th>Example</th>
          <th>Example</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>35</td>
          <td>New York</td>
          <td>USA</td>
          <td>Female</td>
          <td>Yes</td>
          <td>Yes</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
        </div>
      </div>
      </div>
    </div>
  </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>

  </body>


</html>
