<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end"> <!-- Full width column to use flex utilities -->
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">View Tasks</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="content container mt-3">
                <div class="row">
                    <div class="col-md-3 text-white col bg-secondary d-flex justify-content-around px-1 py-4 rounded">
                        <h3>Total Tasks</h3>
                        <span>{{ $totalTasks }}</span>
                    </div>
                    <div class="col-md-3 text-white col bg-secondary d-flex justify-content-around px-1 py-4 rounded">
                        <h3>Completed Tasks</h3>
                        <span>{{ $completedTasks }}</span>
                    </div>
                    <div class="col-md-3 text-white col bg-secondary d-flex justify-content-around px-1 py-4 rounded">
                        <h3>Pending Tasks</h3>
                        <span>{{ $pendingTasks }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
