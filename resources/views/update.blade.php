@extends('layout')

    @section('content')

        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('todos.save', ['id' => $todo->id]) }}" method="POST">
                    {{csrf_field()}}
                    <input type="text" class="form-control input-block" name="todo" value="{{ $todo->todo }}" placeholder="Create a new Todo">
                </form>
            </div>
        </div>

        <hr>

    @stop