<?php $__env->startSection('sidenav'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <div class="col-lg-3">
    <div class="list-group">
      <a href="/Dashboard-Postingan" class="list-group-item active main-color-bg">
        <span><img src="dashboard.png" alt="" class="img-rounded" width="20px"></span> Dashboard
      </a>
        <a data-toggle="modal" href="#modalAlbum" id="linkk" class="list-group-item list-group-item-action" ><span><i class="fa fa-plus" style="font-size:25px;color:#1abc9c"></i></span> Album Baru</a>
        <a data-toggle="modal" href="#modalFoto" id="linkk" class="list-group-item list-group-item-action"><span><i class="fa fa-file-photo-o" style="font-size:25px;color:#1abc9c"></i></span> Upload Foto</a>
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
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <style media="screen">
  .inputDnD {
.form-control-file {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 6em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  background-color: #c61c23;
  box-shadow: 0 0 5px solid currentColor;
  &:before {
    content: attr(data-title);
    position: absolute;
    top: 0.5em;
    left: 0;
    width: 100%;
    min-height: 6em;
    line-height: 2em;
    padding-top: 1.5em;
    opacity: 1;
    visibility: visible;
    text-align: center;
    border: 0.25em dashed currentColor;
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    overflow: hidden;
  }
  &:hover {
    &:before {
      border-style: solid;
      box-shadow: inset 0px 0px 0px 0.25em currentColor;
    }
  }
}
}
  </style>
  <div class="card">
    <div class="card-header main-color-bg">
      <span><img src="bintang.png" alt="" class="img-rounded" width="30px"></span> Featured
    </div>
    <div class="card-block">
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-block-2">
            <div class="card-block ml-5 mt-4 mb-4">
              <h2><span><img src="seluruh.png" alt="" class="img-rounded center-block" width="50px"></span> <?php echo e($totalAlbum); ?></h2>
              <h4 class="mx-auto">Total Galeri</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-block-2">
            <div class="card-block ml-5 mt-4 mb-4">
              <h2><span><img src="seluruh.png" alt="" class="img-rounded center-block" width="50px"></span> <?php echo e($totalFoto); ?></h2>
              <h4 class="mx-auto">Total Foto</h4>
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
  <th>Nama</th>
  <th>Waktu diunggah</th>
  <th>Waktu disunting</th>
  <th>Aksi</th>
</tr>
</thead>
<tbody>
  <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>

      <td><?php echo e($album->nama); ?></td>
      <td><?php echo e($album->created_at); ?></td>
      <td><?php echo e($album->updated_at); ?></td>
      <td><button type="button" class="btn btn-danger hapus" data-dismiss="modal" id="delete">Hapus</button></td>
      <td><a href="/Detail-Foto/<?php echo e($album->id); ?>" class="btn btn-primary">View</a></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</tbody>
</table>
</div>
<br>


</div>
<div class="container">
  <div class="row">
    <div class="offset-lg-5 col-lg-4">
      <?php echo e($albums->links()); ?>

    </div>
  </div>
  <div class="row">
    <div class="offset-lg-5 col-lg-4">

    </div>
  </div>
</div>
</div>
<div class="modal fade" id="modalAlbum">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buat Album Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/bikin-album" id="form">
              <?php echo e(csrf_field()); ?>

            <fieldset>
              <input type="hidden" name="" value="" id="iD">
              <div class="form-group">
                <label for="" class="control-label">Nama Album</label>
                <input type="text" class="form-control" name="nama">
              </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="modalFoto">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload Foto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/upload" id="form" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

            <fieldset>
              <input type="hidden" name="" value="" id="iD">
              <div class="form-group">
                <label for="" class="control-label">Pilih Album</label>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Album
                  </button>
                  <select class="dropdown-menu" name="album" id="album">
                    <?php $__currentLoopData = $albumMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $albumMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option selected="album" value="<?php echo e($albumMenu->id); ?>"><?php echo e($albumMenu->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
            </fieldset>
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="input-group mb-3">
                    <label class="custom-file border">
                      <input type="file" id="inputGroupFile02" class="custom-file-input" required name="file[]" multiple>
                      <span class="custom-file-control pr-3" style="white-space: nowrap;">Select file... </span>
                      <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupFile02">Click Me</span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
function readUrl(input) {
if (input.files && input.files[0]) {
  let reader = new FileReader();
  reader.onload = (e) => {
    let imgData = e.target.result;
    let imgName = input.files[0].name;
    input.setAttribute("data-title", imgName);
    console.log(e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
  }


}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>