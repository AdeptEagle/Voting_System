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

    <form action="{{ route('candidates.update', $candidate) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $candidate->firstname }}" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $candidate->lastname }}" required>
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <input type="text" class="form-control" id="course" name="course" value="{{ $candidate->course }}" required>
        </div>
        <div class="mb-3">
            <label for="partylist" class="form-label">Party List</label>
            <input type="text" class="form-control" id="partylist" name="partylist" value="{{ $candidate->partylist }}">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $candidate->position }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Candidate</button>
        <a href="{{ route('candidates.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>