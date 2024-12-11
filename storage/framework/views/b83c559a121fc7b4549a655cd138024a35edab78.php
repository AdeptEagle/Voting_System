<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Candidate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Edit Candidate</h1>

    <form action="<?php echo e(route('candidates.update', $candidate)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo e($candidate->firstname); ?>" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo e($candidate->lastname); ?>" required>
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <input type="text" class="form-control" id="course" name="course" value="<?php echo e($candidate->course); ?>" required>
        </div>
        <div class="mb-3">
            <label for="partylist" class="form-label">Party List</label>
            <input type="text" class="form-control" id="partylist" name="partylist" value="<?php echo e($candidate->partylist); ?>">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="<?php echo e($candidate->position); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Candidate</button>
        <a href="<?php echo e(route('candidates.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html><?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views/candidates/edit.blade.php ENDPATH**/ ?>