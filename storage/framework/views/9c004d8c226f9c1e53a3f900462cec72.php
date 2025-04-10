<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="menu">
<?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('index')); ?>">Home</a> |
        <a href="<?php echo e(route('login')); ?>"><b>Đăng nhập</b></a> |
        <a href="<?php echo e(route('user.createUser')); ?>">Đăng ký</a>
        <?php else: ?>
        <a href="<?php echo e(route('signout')); ?>">Logout</a>
        <?php endif; ?>
    </div>
    <h1>Chào mừng bạn đến với trang web</h1>

    <div class="footer">
        Lập trình web @01/2024
    </div>
</body>
</html>
<?php /**PATH D:\laravel\resources\views/crud_user/index.blade.php ENDPATH**/ ?>