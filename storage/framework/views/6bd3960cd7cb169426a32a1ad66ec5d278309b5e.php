<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body style="background-color:#2d3436" style="width:400px;">
    <div class="container" >
      <div class="row  mt-4 mr-4 ml-4 mb-4">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                  <img src="Logo.jpg" alt="" class="mx-auto d-block" width="150px">
              </div>

              <div class="modal-body">
                <h4 class="text-center">Login Pengurus Humas IPMKRY-KKB</h4>
                <br>
                <form class="form-horizontal ml-5 " method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <label for="email" class="col-md-2 control-label">Email</label>

                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <label for="password" class="col-md-2 control-label">Password</label>

                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control" name="password" required>

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>

                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>

                <br>
                <?php if(count($errors)>0): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="alert alert-danger">
                        <?php echo e($error); ?>

                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>


          </div>
        </div>


      </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
  </body>
</html>
