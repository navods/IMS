

<?php $__env->startSection('content'); ?>
        <div class="container">
            <form class="mt-3">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="name" class="form-control" name="name">
                  </div>
                <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="username" class="form-control" name="username">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;background-color:#9C10EC;border:0">Signup</button>
              </form>
              <br>
              <p>Already have an account? <b>Login</b></p>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects by Navva\UOC\Mini Project\IMS\IMS\resources\views/reg.blade.php ENDPATH**/ ?>