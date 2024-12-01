<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rutas de autenticación
Auth::routes(['verify' => false]); 

// Middleware de autenticación para proteger las rutas de tareas
Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
});

// Ruta global para Vue.js (SPA) — al final de todo
Route::get('/{any}', function () {
    return view('taskslist.index');
})->where('any', '.*');


