@extends('layout.layout')

@section('content')
    <h1>Add New Task</h1>
    <hr>
     <form action="/tasks" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Task name</label>
        <input type="text" class="form-control" id="task_name"  name="name">
      </div>
      <div class="form-group">
        <label for="message">Task message</label>
        <input type="text" class="form-control" id="task_message" name="message">
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