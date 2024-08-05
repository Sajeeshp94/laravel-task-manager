<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align : center
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
        .navbar {
            background: #f8f9fa;
            padding: 20px;
            display: flex;
            justify-content:end;
            align-items: center;
            height:20px
        }
        .link-container {
            display: flex;
            gap: 15px; 
            align-items: center;
            
        }
        a {
            text-decoration: none;
            justify-content:stretch;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="link-container">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-success">ViewTasks</a>
        </div>
    </div>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $task->description }}</textarea><br>

        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" value="{{ $task->due_date }}" required><br>

        <label for="priority">Priority:</label>
        <select id="priority" name="priority" required>
            <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
            <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
        </select><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
        </select><br>

        <button type="submit">Update Task</button>
    </form>
</body>
</html>
