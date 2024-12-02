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
                                    <a href="{{ route('candidates.edit', $candidate) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('candidates.destroy', $candidate) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
