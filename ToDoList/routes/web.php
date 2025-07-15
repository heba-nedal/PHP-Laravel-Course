<?php

use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('todolist')->name('toDoList.')->controller(ToDoController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/edit_task/{id}', 'editView')->name('editPage');
    Route::get('/viewtasks', 'view')->name('viewTasks');
    Route::post('/addtask', 'add')->name('addTask');
    Route::post('/edittask', 'editPost')->name('editTask');
    Route::post('/action', 'action')->name('action');
});
