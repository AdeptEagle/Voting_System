<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div style="max-width: 800px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2>Welcome, <?php echo e(session('user')->username); ?></h2>
        <p>This is your dashboard.</p>
        <a href="<?php echo e(route('logout')); ?>" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #f44336; color: white; text-decoration: none; border-radius: 4px;">Logout</a>
    </div>
</body>
</html><?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views/dashboard.blade.php ENDPATH**/ ?>