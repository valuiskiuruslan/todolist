@extends('todos.layout')

@section('content')
    <h1>Edit: {{ $todo->title }}</h1>
    <x-alert />
    <form action="{{ route('todo.update', $todo->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group row justify-content-center">
            <div class="col-sm-10">
                <input type="text" name="title" value="{{$todo->title}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">
                Save
            </button>
        </div>
    </form>
    
    <a href="{{ route('todo.index') }}" class="btn btn-primary">
        All Todos
    </a>
@endsection
