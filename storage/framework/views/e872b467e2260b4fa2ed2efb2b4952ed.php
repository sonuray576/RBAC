<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldPushContent('page-css'); ?>
</head>
<body>
<?php echo $__env->yieldContent('content'); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php echo e(asset('assets/js/login.js')); ?>"></script>
<?php echo $__env->yieldPushContent('page-script'); ?>
</html><?php /**PATH C:\Users\hp\OneDrive\Desktop\RBAC\RBAC\resources\views/layouts/login_master.blade.php ENDPATH**/ ?>