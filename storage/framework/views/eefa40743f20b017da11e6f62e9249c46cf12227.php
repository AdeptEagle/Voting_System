<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Candidates List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .wrapper {
            display: flex;
            flex: 1;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            min-height: 100vh;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .navbar {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
    </div>
    <div class="wrapper">
        <div class="sidebar">
            <h5>Admin Menu</h5>
        </div>
        <div class="content">
            <div class="container">
                <h1>Candidates List</h1>
                <a href="<?php echo e(route('candidates.create')); ?>" class="btn btn-primary">Add Candidate</a>

                <?php if(session('success')): ?>
                    <div class="alert alert-success mt-3"><?php echo e(session('success')); ?></div>
                <?php endif; ?>

                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Party List</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($candidate->firstname); ?></td>
                                <td><?php echo e($candidate->lastname); ?></td>
                                <td><?php echo e($candidate->course); ?></td>
                                <td><?php echo e($candidate->partylist); ?></td>
                                <td><?php echo e($candidate->position); ?></td>
                                <td>
                                    <a href="<?php echo e(route('candidates.edit', $candidate)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="<?php echo e(route('candidates.destroy', $candidate)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views/candidates/index.blade.php ENDPATH**/ ?>