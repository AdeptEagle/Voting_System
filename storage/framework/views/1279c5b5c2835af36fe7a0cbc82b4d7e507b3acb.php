<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Council Voting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('Css/VotingMenu.css')); ?>">
</head>
<body>
<div class="sidebar hidden">
        <div class="sidebar h2">
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="<?php echo e(route('Voting.Home')); ?>">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="<?php echo e(route('Voting.Candidates')); ?>">
                            <i class="fa fa-camera-retro fa-2x"></i>
                            <span class="nav-text">
                                SSC Candidates  
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="<?php echo e(route('voting.index')); ?>">
                            <i class="fa fa-box-archive fa-2x"></i>
                            <span class="nav-text">
                                Election Voting
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="Results.html">
                            <i class="fa fa-chart-simple fa-2x"></i>
                            <span class="nav-text">
                                Election Results 
                            </span>
                        </a>
                    </li>  
                </ul>
                
                <ul class="logout">
                    <li>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-light fa-user fa-2x"></i>
                            <span class="nav-text">
                                Logout
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <h1>YOU MAY NOW CAST YOUR VOTES!</h1>

    <form action="<?php echo e(route('voting.vote')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position => $candidatesList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="position-section">
                <h2><?php echo e(ucfirst($position)); ?> Student Council</h2>
                <p>You can only vote for one candidate</p>
                <div class="candidates">
                    <?php $__currentLoopData = $candidatesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="candidate">
                            <img src="<?php echo e($candidate['image']); ?>" alt="<?php echo e($candidate['name']); ?>">
                            <h3><?php echo e($candidate['name']); ?></h3>
                            <p><?php echo e($candidate['course']); ?></p>
                            <label>
                                <input type="radio" name="votes[<?php echo e($position); ?>]" value="<?php echo e($candidate['id']); ?>" required>
                                VOTE
                            </label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="double-check-note">
            Double check your choices before submitting your votes.
        </div>

        <button type="submit" id="submit-vote">SUBMIT VOTE</button>

       
</body>

    <script src="https://kit.fontawesome.com/b70fc1673e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html><?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views/vote/index.blade.php ENDPATH**/ ?>