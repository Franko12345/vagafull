@extends('layout.layout')

@section('content')
            <h1>Showing Task {{ $task->name }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Name:</strong> {{ $task->name }}<br>
            <strong>Message:</strong> {{ $task->message }}
        </p>
    </div>
@endsection