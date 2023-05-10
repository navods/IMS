

<?php $__env->startSection('content'); ?>
        <div class="container">
            <form action="<?php echo e(route('login.post')); ?>" method="POST" class="mt-3">
              <?php echo csrf_field(); ?> 
              <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="username" class="form-control" name="username">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;background-color:#9C10EC;border:0">Login</button>
              </form>
              <br>
              <p>New User? <a href=<?php echo e(route('registration')); ?>><b>Signup</b></a></p>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects by Navva\UOC\IMS\IMS\resources\views/login.blade.php ENDPATH**/ ?>