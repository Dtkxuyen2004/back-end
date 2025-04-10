<?php $__env->startSection('content'); ?>

    <div class="container">

        <h2>Màn hình đăng ký</h2>
        <div class="card-body">
            <form action="<?php echo e(route('user.postUser')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <input type="text" placeholder="Họ Và Tên" id="name" class="form-control" name="name" required
                        autofocus>
                    <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required
                        autofocus>
                    <?php if($errors->has('email')): ?>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Nhập mật khẩu" id="password" class="form-control" name="password"
                        required>
                    <?php if($errors->has('password')): ?>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Nhập lại mật khẩu" id="password" class="form-control"
                        name="password" required>
                    <?php if($errors->has('password')): ?>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Đăng ký</button>
                </div>

            </form>
        </div>
        <div class="footer">
        Lập trình web @01/2024
    </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\resources\views/crud_user/create.blade.php ENDPATH**/ ?>