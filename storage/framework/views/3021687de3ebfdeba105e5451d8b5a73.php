
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="justify-content-end">
        <a href="<?php echo e(route('roles.assign')); ?>" class="btn btn-sm btn-primary mt-3 mb-3 ">Assign Permission</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h1>Manage User</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $roles = $user->roles;
                            $roleName = '';
                            if(count($roles) > 0){
                                foreach($roles as $role){
                                    $roleName = $role->name; 
                                }
                            }
                        ?>
                        <tr>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($roleName); ?></td>
                            <td><?php echo e($roleName); ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?php echo e(route('edit.permission', $user->id)); ?>" class="btn btn-sm btn-primary mt-3 mb-3 me-2">Edit</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\OneDrive\Desktop\RBAC\RBAC\resources\views/dashboard.blade.php ENDPATH**/ ?>