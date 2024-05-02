<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas',  [TodosController::class, 'index'])->name('todos');

Route::post('/tareas', [TodosController::class, 'store'])->name('todos');

Route::patch('/tareas', [TodosController::class, 'store'])->name('todos-edit');
Route::delete('/tareas', [TodosController::class, 'store'])->name('todos-destroy');
