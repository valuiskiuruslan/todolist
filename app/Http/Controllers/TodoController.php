<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoStoreRequest;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function store(TodoStoreRequest $request)
    {
        /** @var User $user */
        $user = auth()->user();
        $user->todos()->create($request->all());
//        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo is created successfully');
    }

    /**
     * Show the form for editing the specified todo.
     * @param Todo $todo
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit')->with(['todo' => $todo]);
    }

    /**
     * Update the specified todo in storage.
     * @param TodoStoreRequest $request
     * @param Todo $todo
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(TodoStoreRequest $request, Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Todo is updated successfully');
    }

    /**
     * Remove the specified todo from storage.
     * @param Todo $todo
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect(route('todo.index'))->with('message', 'Todo is deleted');
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
