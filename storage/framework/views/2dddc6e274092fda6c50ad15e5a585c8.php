<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container">
            <h2> Danh Sách User</h2>
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($user->id); ?></th>
                                <th><?php echo e($user->name); ?></th>
                                <th><?php echo e($user->email); ?></th>
                                <th>
                                    <a href="<?php echo e(route('user.readUser', ['id' => $user->id])); ?>">View</a> |
                                    <a href="<?php echo e(route('user.updateUser', ['id' => $user->id])); ?>">Edit</a> |
                                    <a href="<?php echo e(route('user.deleteUser', ['id' => $user->id])); ?>">Delete</a>
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="footer">
        Lập trình web @01/2024
    </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\resources\views/crud_user/list.blade.php ENDPATH**/ ?>