@extends('todos.layout')

@section('content')
    <h1 class="text-2xl">What next you need To-Do</h1>
    <x-alert />
    <form class="py-5" action="/todos/save" method="POST">
        @csrf
        <input type="text" name="title" class="p-2 border rounded">
        <input type="submit" value="Create" class="p-2 border rounded">
    </form>

    <a href="/todos" class="m-5 py-2 px-1 bg-white-400 border cursor-pointer text-black rounded">
        All Todos
    </a>
@endsection
