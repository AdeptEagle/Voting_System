<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Council Voting</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #003399;
            margin-bottom: 30px;
        }

        .position-section {
            margin-bottom: 40px;
        }

        .candidates {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .candidate {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 200px;
            text-align: center;
        }

        .candidate img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .candidate h3 {
            font-size: 18px;
            margin: 15px 0 5px;
        }

        .candidate p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .candidate .btn {
            display: block;
            margin: 10px auto;
            padding: 8px 16px;
            border-radius: 8px;
            background-color: #0044cc;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .candidate .btn:hover {
            background-color: #003399;
        }

        .btn-view {
            background-color: #fff;
            border: 1px solid #0044cc;
            color: #0044cc;
        }

        .btn-view:hover {
            background-color: #f0f0f0;
        }

        #submit-vote {
            padding: 12px 20px;
            background-color: #003399;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 30px;
        }

        #submit-vote:hover {
            background-color: #002277;
        }

        .double-check-note {
            margin-top: 20px;
            font-size: 14px;
            color: #f00;
        }


        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            max-width: 600px;
            width: 90%;
            text-align: left;
            position: relative;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .modal-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .modal-header-text {
            display: flex;
            flex-direction: column;
        }

        .modal-header h2, .modal-header h3 {
            margin: 0;
        }

        .modal-header h2 {
            font-size: 24px;
            margin: 0;
            color: #003399;
        }

        .modal-body {
            margin-top: 20px;
        }

        .modal-body h3 {
            color: #003399;
            margin-bottom: 10px;
        }

        .modal-body p {
            font-size: 14px;
            color: #333;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .modal-close:hover {
            color: #f00;
        }

        @media (max-width: 768px) {
            .candidates {
                flex-direction: column;
                align-items: center;
            }

            .candidate {
                width: 100%;
                max-width: 350px;
            }
        }



    .fa-2x {
        font-size: 2em;
    }
    
    .fa {
      position: relative;
      display: table-cell;
      width: 60px;
      height: 36px;
      text-align: center;
      vertical-align: middle;
    }
    
    .main-menu:hover,nav.main-menu.expanded {
      width:250px;
      overflow:visible;
    }
    
    .main-menu {
        background:#212121;
        border-right:1px solid #e5e5e5;
        position:absolute;
        top:0;
        bottom:0;
        height:100vh;
        left:0;
        width:60px;
        overflow:hidden;
        -webkit-transition:width .05s linear;
        transition:width .05s linear;
        transform:translateZ(0) scale(1,1);
        z-index:1000;
        position: fixed;
      }
    
    .main-menu>ul {
      margin:7px 0;
    }
    
    .main-menu li {
      position:relative;
      display:block;
      width:250px;
    }
    
    .main-menu li>a {
      position: relative;
      display: table;
      border-collapse: collapse;
      border-spacing: 0;
      color: #999;
      font-family: arial;
      font-size: 16px;
      text-decoration: none;
      transform: translateZ(0) scale(1, 1);
      transition: all 0.1s linear;
    }
    
    .main-menu .nav-icon {
      position:relative;
      display:table-cell;
      width:60px;
      height:36px;
      text-align:center;
      vertical-align:middle;
      font-size:18px;
    }
    
    .main-menu .nav-text {
      position:relative;
      display:table-cell;
      vertical-align:middle;
      width:190px;
        font-family: 'Titillium Web', sans-serif;
    }
    
    .main-menu>ul.logout {
      position:absolute;
      left:0;
      bottom:0;
    }
    
    .no-touch .scrollable.hover {
      overflow-y:hidden;
    }
    
    .no-touch .scrollable.hover:hover {
      overflow-y:auto;
      overflow:visible;
    }
    
    a:hover,a:focus {
      text-decoration:none;
    }
    
    nav {
      -webkit-user-select:none;
      -moz-user-select:none;
      -ms-user-select:none;
      -o-user-select:none;
      user-select:none;
    }
    
    nav ul,nav li {
      outline:0;
      margin:0;
      padding:0;
      text-align: left;
    }
    .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
      color:#fff;
      background-color:#000000;
    }
    .area {
      float: left;
      background: #e2e2e2;
      width: 100%;
      height: 100%;
    }
    @font-face {
      font-family: 'Titillium Web';
      font-style: normal;
      font-weight: 300;
      src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
    }
    </style>
</head>
<body>
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
    </form>
</body>
</html><?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views/voting/index.blade.php ENDPATH**/ ?>