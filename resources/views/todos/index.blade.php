@extends('todos.layout')

@section('content')
    <div class="text-center mb-2">
        <h1>All your Todos</h1>
        <a href="/todos/create" class="btn btn-info">
            Create New
        </a>
    </div>
    <x-alert/>
    <ul class="list-group list-group-flush">
        @foreach($todos as $todo)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-10">
                        <span style="{{$todo->completed ? 'text-decoration: line-through' : ''}}">
                            {{ $todo->title }}
                        </span>
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-warning" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        @if(!$todo->completed)
                            <a href="" class="btn btn-danger" title="Complete">
                                <i class="fas fa-check"></i>
                            </a>
                        @else
                            <a href="" class="btn text-success" title="Undone">
                                <i class="fas fa-check"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
