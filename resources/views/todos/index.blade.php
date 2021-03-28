@extends('todos.layout')

@section('content')
    <div class="mb-1">
        <h1 class="text-2xl">All your Todos</h1>
        <a href="/todos/create" class="btn btn-info">
            Create New
        </a>
    </div>
    <x-alert />
    <ul class="list-group list-group-flush">
        @foreach($todos as $todo)
            <li class="list-group-item">
                <span>{{ $todo->title }}</span>
                <a href="{{'/todos/' . $todo->id . '/edit'}}" class="btn btn-warning">
                    Edit
                </a>
            </li>
        @endforeach
    </ul>
@endsection
