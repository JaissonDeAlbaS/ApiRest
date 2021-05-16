<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas',[TaskController::class, 'index']);

Route::put('/tareas/actualizar',[TaskController::class, 'update']);

Route::post('/tareas/guardar',[TaskController::class, 'store']);

Route::delete('/tareas/borrar/{id}',[TaskController::class, 'destroy']);

Route::get('/tareas/buscar',[TaskController::class, 'show']);