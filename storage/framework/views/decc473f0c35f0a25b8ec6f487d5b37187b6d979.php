<?php $__env->startSection('content'); ?>

  <div class="container">
    <div class="row">
      <?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
          <div class="card mb-1">
           <div class="card-header main-color-bg">
             <span><img src="stats.png" alt="" class="img-rounded" width="30px"></span> Image
           </div>
           <div class="card-block">
               <img src="<?php echo e(URL::asset('uploads/'.$foto->foto)); ?>" alt="" class="card-img-top">
           </div>
           <div class="card-body">
             <input type="hidden" name="_method" value="DELETE">
             <!-- Or use the helper function to do it for you -->

             <p><?php echo e($foto->foto); ?></p>
             <p><?php echo e($foto->created_at); ?></p>
             <form action="<?php echo e(action('UploadController@deleteFoto', $foto->id)); ?>" method="post">
               <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
               <input name="_method" type="hidden" value="DELETE">
               <button type="submit" class="btn btn-danger">Delete</button>
             </form>
            
           </div>
         </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>