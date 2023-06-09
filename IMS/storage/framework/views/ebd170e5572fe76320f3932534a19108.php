<?php $__env->startSection('bootstrap'); ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <div class="container">
            <form action="<?php echo e(route('registration.post')); ?>" method="POST" class="mt-3">
              <?php echo csrf_field(); ?>  
              <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="name" class="form-control" name="name">
                  </div>
                <div class="mb-3">
                  <label class="form-label">User ID</label>
                  <input type="username" class="form-control" name="username">
                </div>
                <div class="mb-3">
                  <label for="facselect" class="form-label">Select Faculty</label>
                  <select id="facselect" name="facselect" class="form-select">
                    <option value="1">Faculty of Technology</option>
                    <option value="2">Faculty of Science</option>
                    <option value="3">Faculty of Law</option>
                    <option value="4">Faculty of Management & Finance</option>
                    <option value="5">Faculty of Arts</option>
                    <option value="6">Faculty of Medicine</option>
                    <option value="7">Faculty of Nursing</option>
                    <option value="8">Faculty of Indigenous Medicine</option>
                    <option value="9">Faculty of Graduate Studies</option>
                    <option value="10">Faculty of Education</option>
                    <option value="11">School of Computing</option>
                    <option value="12">Sri Palee Campus</option>
                    <option value="13">Department of Physical Education</option>
                    <option value="14">College House</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Department (if applicable)</label>
                  <input type="department" class="form-control" name="department">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Lab ID (if applicable)</label>
                  <input type="labID" class="form-control" name="labID">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;background-color:#9C10EC;border:0">Signup</button>
              </form>
              <br>
              <p>Already have an account? <a href=<?php echo e(route('login')); ?>><b>Login</b></a></p>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects by Navva\UOC\IMS\IMS\resources\views/reg.blade.php ENDPATH**/ ?>