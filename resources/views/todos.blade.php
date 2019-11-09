@extends('layout')

    @section('content')

        <div class="row">
            <div class="col-lg-12 col-lg-offset-3 ">
                <form action="/create/todo" method="POST">
                    {{csrf_field()}}
                    <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new Todo">
                </form>
            </div>
        </div>

        <hr>

        @foreach($todos as $todo)

            {{ $todo->todo }} 
            <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger text-white">X</a>
            <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-sm text-white ">Update</a>
            
            @if(!$todo->completed)
                <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-sm btn-success">Mark as Completed</a>
            @else
                <span class="text-success">Completed</span>
            @endif

            <hr>

        @endforeach

    @stop