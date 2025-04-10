<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('js/scripts.js')); ?>"></script>
</head>
<body>

<div class="menu">
<?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('index')); ?>">Home</a> |
        <a href="<?php echo e(route('login')); ?>"><b>Đăng nhập</b></a> |
        <a href="<?php echo e(route('user.createUser')); ?>">Đăng ký</a>
        <?php else: ?>
        <a href="<?php echo e(route('index')); ?>">Home</a>|
        <a href="<?php echo e(route('signout')); ?>">Đăng Xuất</a>
        
        <?php endif; ?>
    </div>

<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH D:\laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>