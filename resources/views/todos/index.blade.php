@extends('todos.layout')

@section('content')
    <div class="text-center mb-2">
        <h1>All your Todos</h1>
        <a href="/todos/create" class="btn btn-info">
            Create New
        </a>
    </div>
    <x-alert />
    <ul class="list-group list-group-flush">
        @foreach($todos as $todo)
            <li class="list-group-item d-flex justify-content-between">
                <span class="mr-3">{{ $todo->title }}</span>
                <div>
                    <a href="{{'/todos/' . $todo->id . '/edit'}}" class="btn btn-warning">
                        Edit
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
