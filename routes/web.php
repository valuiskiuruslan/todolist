<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::post('/upload', [UserController::class, 'uploadAvatar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::middleware('auth')->group(function () {
Route::resource('/todo', TodoController::class)->middleware('auth');
Route::prefix('/todo')->group(function () {
    Route::put('/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
    Route::put('/{todo}/undone', [TodoController::class, 'undone'])->name('todo.undone');
});
//});
