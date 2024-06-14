@extends('layout.layout')

@section('content')
    <h1>Edit Task</h1>
    <hr>
     <form action="{{url('tasks', [$task->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Task Name</label>
        <input type="text" value="{{$task->name}}" class="form-control" id="task_name"  name="name" >
      </div>
      <div class="form-group">
        <label for="message">Task Message</label>
        <input type="text" value="{{$task->message}}" class="form-control" id="task_message" name="message" >
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection