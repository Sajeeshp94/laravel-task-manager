<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <style>
        .table {
            width:100%;
            justify-content:space-between; 
            text-align:center;  
            margin: auto;
            padding:20px
        }
        .navbar {
            background: #f8f9fa;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height:20px
        }
        th {
            background-color: #f2f2f2;
            padding: 12px 15px;
        }
        td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }
        a {
            text-decoration: none;
            justify-content:stretch;
        }
        .link-container {
            display: flex;
            gap: 15px; 
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Task List</h1>
        <div class="link-container">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('tasks.create') }}" class="btn btn-success">AddTask</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>{{ $task->priority }}</td>
                    <td>{{ $task->status }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
