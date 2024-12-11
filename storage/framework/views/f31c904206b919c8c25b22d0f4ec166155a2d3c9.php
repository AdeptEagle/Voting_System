    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo e(asset('Css/login.css')); ?>">
    </head>
    <body>
        <div class="container">
            <div class="left-side">
            <h2>Login</h2>
            <?php if(session('error')): ?>
                <div style="color: red; margin-bottom: 10px;">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('login.submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="username">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="*******">
                </div>
                <button type="submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px;">Login</button>
            </form>
        </div>

        <div class="right-side">
            <div class="shape"></div>
            <img src="<?php echo e(asset('Images/LOGO.jpg')); ?>" alt="Image" class="login-image">
        </div>
    </body>
    </html><?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views//login.blade.php ENDPATH**/ ?>