<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UOC IMS</title>
    <?php echo $__env->yieldContent('bootstrap'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;600;700&family=Merriweather+Sans:wght@300;700&display=swap" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
  </head>
  <body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html><?php /**PATH D:\Projects by Navva\UOC\IMS\IMS\resources\views/layout.blade.php ENDPATH**/ ?>