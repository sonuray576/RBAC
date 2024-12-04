
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Assign Role and Permission</h4>
    </div>
    <div class="card-body">
    <form action="<?php echo e(route('store.role.permission')); ?>" method="POST" id="assign-permission">
        <?php echo csrf_field(); ?>
        <div class="col-md-6">
            <label for="user">User</label>
            <select class="form-control" name="user_id">
                <option value="">Select user</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e(ucfirst($user->name)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="role">Role</label>
            <select class="form-control"  name="role_id">
                <option value="">Select role</option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="role">Permission</label>
            <select class="form-control"  name="permission_id">
                <option value="">Select permission</option>
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($permission->id); ?>"><?php echo e(ucfirst(str_replace('_',' ', $permission->name))); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="button" id="assignPermission" class="btn btn-sm btn-primary mt-3">Assign</button>
    </form>
    </div>
</div>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\OneDrive\Desktop\RBAC\RBAC\resources\views/assign_permission.blade.php ENDPATH**/ ?>