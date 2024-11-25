85% of storage used … If you run out, you can't create, edit, and upload files.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Candidate Details</h1>

    <table class="table">
        <tr>
            <th>First Name</th>
            <td>{{ $candidate->firstname }}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{ $candidate->lastname }}</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>{{ $candidate->course }}</td>
        </tr>
        <tr>
            <th>Party List</th>
            <td>{{ $candidate->partylist }}</td>
        </tr>
        <tr>
            <th>Position</th>
            <td>{{ $candidate->position }}</td>
        </tr>
    </table>

    <a href="{{ route('candidates.index') }}" class="btn btn-secondary">Back</a>
</div>
</body>
</html>