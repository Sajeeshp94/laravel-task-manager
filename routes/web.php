<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskAssignmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/tasks/create', function() {
//     return view('tasks.create');
// });

// Route::get('/login', function() {
//     return view('login');
// });

// Route::get('/register', function() {
//     return view('register');
// });

// Route::get('/dashboard', function() {
//     return view('dashboard');
// });

// Route::get('/task', function() {
//     return view('task');

// });

Auth::routes();

// Route::middleware(['auth'])->group(function () {
//     Route::resource('tasks', TaskController::class);
//     Route::get('tasks/{task}/assign', [TaskAssignmentController::class, 'assign'])->name('tasks.assign');
//     Route::post('tasks/{task}/assign', [TaskAssignmentController::class, 'store'])->name('tasks.assign.store');
// });

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('tasks', [App\Http\Controllers\TaskShowController::class, 'task'])->name('tasks');
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::resource('tasks', TaskController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');