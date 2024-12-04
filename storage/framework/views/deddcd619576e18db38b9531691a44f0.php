
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startPush('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="bgc center">
  <div class="container">
    <div class="header">
      <h1><span class="l">L</span>OGIN</h1>
    </div>
    <form action="<?php echo e(route('post.login')); ?>" id="login-form" method="POST">
        <?php echo csrf_field(); ?>
      <label for="uname">Email</label>
      <input type="text" class="inp" name="email" required>
      <label for="psw">Password</label>
      <input type="password" class="inp" name="password" required>
      <button type="button" id="login">Login</button>
    </form>
    <div class="signup">
      <b>Don't have account?</b>
      <a href="#">Sign up</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\OneDrive\Desktop\RBAC\RBAC\resources\views/login/index.blade.php ENDPATH**/ ?>