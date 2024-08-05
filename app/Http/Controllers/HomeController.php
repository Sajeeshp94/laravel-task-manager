<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalTasks = Task::count();
        $pendingTasks = Task::where('status', 'Pending')->count();
        $completedTasks = Task::where('status', 'Completed')->count();

        return view('home', compact('totalTasks', 'pendingTasks', 'completedTasks'));
    }
}
