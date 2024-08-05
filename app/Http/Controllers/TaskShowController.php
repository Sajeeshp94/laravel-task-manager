<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskShowController extends Controller
{
    public function task()
    {
        return view('tasks');
    }
}
