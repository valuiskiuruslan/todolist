@if(!$todo->completed)
    <span
        class="btn btn-info" title="Complete"
        onclick="document.getElementById('form-complete-{{$todo->id}}').submit()"
    >
        <i class="fas fa-check"></i>
    </span>
    <form id="form-complete-{{$todo->id}}" style="display: none" action="{{route('todo.complete', $todo->id)}}"
          method="post">
        @csrf
        @method('put')
    </form>
@else
    <span
        class="btn text-success" title="Undone"
        onclick="document.getElementById('form-undone-{{$todo->id}}').submit()"
    >
        <i class="fas fa-check"></i>
    </span>
    <form id="form-undone-{{$todo->id}}" style="display: none" action="{{route('todo.undone', $todo->id)}}"
          method="post">
        @csrf
        @method('put')
    </form>
@endif
