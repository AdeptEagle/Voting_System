<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <link rel="stylesheet" href="<?php echo e(asset('Css/login.css')); ?>">
</head>
<body>
  <div class="container">
    <div class="left-side">
      <h1>Hello, welcome!</h1>


      <?php if($errors->any()): ?>
        <div class="alert alert-danger">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endif; ?>


      <form method="POST" action="<?php echo e(route('Voting.Home')); ?>">
      <?php echo csrf_field(); ?>
      <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="username">
      </div>
      <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="*******">
      </div>
      <div class="checkbox">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
      </div>
      <button type="submit" class="button">Login</button>
      <div id="error-message"></div>
      </form>

    </div>
    <div class="right-side">
      <div class="shape"></div>
      <img src="<?php echo e(asset('Images/LOGO.jpg')); ?>" alt="Image" class="login-image">
    </div>
  </div>
</body>
</html><?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views/Voting/login.blade.php ENDPATH**/ ?>