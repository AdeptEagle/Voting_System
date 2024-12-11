<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin - Add Candidate</title>
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
            <h4>Admin Dashboard</h4>
        </div>
        <div class="wrapper">
            <div class="sidebar">
                <h5>Admin Menu</h5>
            </div>
            <div class="content">
                <div class="container">
                    <h1>Add Candidate</h1>
                    <form action="<?php echo e(route('candidates.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="course" name="course" required>
                        </div>
                        <div class="mb-3">
                            <label for="partylist" class="form-label">Party List</label>
                            <input type="text" class="form-control" id="partylist" name="partylist">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Candidate</button>
                        <a href="<?php echo e(route('candidates.index')); ?>" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Xampp\htdocs\AppDev\Project-Cabardo\resources\views/candidates/create.blade.php ENDPATH**/ ?>