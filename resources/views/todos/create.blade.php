@extends('todos.layout')

@section('content')
    <div class="text-center mb-2">
        <h1>What next you need To-Do</h1>
    </div>
    <x-alert />
    <form action="{{ route('todo.save') }}" method="POST">
        @csrf
        <div class="form-group row justify-content-center">
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">
                Create
            </button>
        </div>
    </form>

    <a href="{{ route('todo.index') }}" class="btn btn-primary">
        All Todos
    </a>
@endsection
