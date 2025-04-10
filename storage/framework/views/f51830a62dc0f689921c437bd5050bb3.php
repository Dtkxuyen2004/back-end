<?php $__env->startSection('content'); ?>
   
    

    <div class="container">
        <h2>Màn hình đăng nhập</h2>
        <form method="POST" action="<?php echo e(route('user.authUser')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                <?php if($errors->has('email')): ?>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group mb-3">
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                <?php if($errors->has('password')): ?>
                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>
            </div>
            <div class="checkbox">
                <input type="checkbox"> Ghi nhớ đăng nhập
            </div>
            <div class="forgot">
                <a href="#">Quên mật khẩu</a>
            </div>
            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Đăng nhập</button>
            </div>
        </form>
    </div>

    <div class="footer">
        Lập trình web @01/2024
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\resources\views/crud_user/login.blade.php ENDPATH**/ ?>