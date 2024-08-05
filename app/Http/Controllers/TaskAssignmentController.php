<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskAssignmentController extends Controller
{
    public function assign(Task $task)
    {
        $users = User::all();
        return view('tasks.assign', compact('task', 'users'));
    }

    public function store(Request $request, Task $task)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        TaskAssignment::create([
            'task_id' => $task->id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('tasks.index');
    }
}
