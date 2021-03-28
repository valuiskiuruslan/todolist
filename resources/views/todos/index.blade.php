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
                            <span class="btn btn-danger" title="Complete"
                                onclick="document.getElementById('form-complete-{{$todo->id}}').submit()">
                                <i class="fas fa-check"></i>
                            </span>
                            <form id="form-complete-{{$todo->id}}" style="display: none" action="{{route('todo.complete', $todo->id)}}" method="post">
                                @csrf
                                @method('put')
                            </form>
                        @else
                            <span class="btn text-success" title="Undone"
                                  onclick="document.getElementById('form-undone-{{$todo->id}}').submit()">
                                <i class="fas fa-check"></i>
                            </span>
                            <form id="form-undone-{{$todo->id}}" style="display: none" action="{{route('todo.undone', $todo->id)}}" method="post">
                                @csrf
                                @method('put')
                            </form>
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
