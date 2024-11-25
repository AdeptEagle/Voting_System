<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidates List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Candidates</h1>
    <a href="{{ route('candidates.create') }}" class="btn btn-primary">Add Candidate</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

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
            @foreach($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->firstname }}</td>
                    <td>{{ $candidate->lastname }}</td>
                    <td>{{ $candidate->course }}</td>
                    <td>{{ $candidate->partylist }}</td>
                    <td>{{ $candidate->position }}</td>
                    <td>
                        <a href="{{ route('candidates.edit', $candidate) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('candidates.destroy', $candidate) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>