<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoSaveRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
//        $todos = Todo::all(); // Maybe it will be better to use every time get() method
        $todos = Todo::orderBy('completed')->get();
        return view('todos.index')->with(['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with(['todo' => $todo]);
    }

    public function save(TodoSaveRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo is created successfully');
    }

    public function update(TodoSaveRequest $request, Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Todo is updated successfully');
    }

    public function complete(Request $request, Todo $todo)
    {
        $todo->update(['completed' => true]);
        return redirect(route('todo.index'))->with('message', 'Todo is completed successfully');
    }

    public function undone(Request $request, Todo $todo)
    {
        $todo->update(['completed' => false]);
        return redirect(route('todo.index'))->with('message', 'Todo is undone again');
    }
}
