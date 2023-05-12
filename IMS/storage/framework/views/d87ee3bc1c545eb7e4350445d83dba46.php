

<?php $__env->startSection('bootstrap'); ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
<!--style="position: absolute; top: 0; bottom: 0; height: 100%; right: 0; width: 85%;"
<div>
    <table class="data">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Faculty
            </th>
            <th>
                Department
            </th>
            <th>
                Lab
            </th>
            <th>
                Authorization
            </th>
        </tr>
    </table>
</div>-->
<h1 style="margin-top:3%; margin-left:3%">New Registrations</h1>

<table class="table" style="margin-top:2%;margin-left:auto;margin-right:auto;width:90%;">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Faculty</th>
        <th scope="col">Department</th>
        <th scope="col">Lab</th>
        <th scope="col">Permission</th>
      </tr>
    </thead>
    <tbody>
      <!--<td scope="row">1</td>-->
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($user['username']); ?></td>
          <td><?php echo e($user['name']); ?></td>
          <td><?php echo e($user['facselect']); ?></td>
          <td><?php echo e($user['department']); ?></td>
          <td><?php echo e($user['labID']); ?></td>
          <td>
              <div class="container">
                <form action="listuserpost/<?php echo e($user->username); ?>" method="POST" class="mt-0">
                  <?php echo csrf_field(); ?> 
                  <div class="row">
                    <div class="col-5">
                      <select id="permission" name="permission" class="form-select">
                        <option value="1">No Access</option>
                        <option value="2">Accept - Technical Officer</option>
                        <option value="3">Accept - Supervisor</option>
                        <option value="4">Accept - Administrator</option>
                        <option value="0">Decline</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn btn-primary" style="width:100%;background-color:#9C10EC;border:0;align:right">Confirm</button>
                    </div>
                  </div>
                </form>
              </div>
            </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects by Navva\UOC\IMS\IMS\resources\views/useradmin.blade.php ENDPATH**/ ?>