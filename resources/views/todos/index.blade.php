@extends('todos.layout')

@section('content')
    <div class="text-center mb-2">
        <h1>All your Todos</h1>
        <a href="/todos/create" class="btn btn-success">
            <span class="fas fa-plus-circle"></span>
        </a>
    </div>
    <x-alert/>
    <ul class="list-group list-group-flush">
        @foreach($todos as $todo)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-1 text-center">
                        @include('todos.complete-button')
                    </div>
                    <div class="col-sm-9">
                        <span style="{{$todo->completed ? 'text-decoration: line-through' : ''}}">
                            {{ $todo->title }}
                        </span>
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-warning" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <span class="btn btn-danger"
                            onclick="if (confirm('Are you sure you want to delete this todo?')) {
                                document.getElementById('form-delete-{{$todo->id}}').submit();
                            }"
                        >
                            <i class="fas fa-trash"></i>
                        </span>
                        <form
                            id="form-delete-{{$todo->id}}"
                            style="display: none"
                            action="{{route('todo.delete', $todo->id)}}"
                            method="post"
                        >
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
