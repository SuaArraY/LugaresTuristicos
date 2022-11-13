<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TareaController;

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/',[ImageController::class, 'index']);
Route::get('/images',[ImageController::class, 'index']);
Route::get('/images/create',[ImageController::class, 'create']);
Route::post('/images/create',[ImageController::class, 'store']);

Route::get('tarea/registrar', [TareaController::class ,'create'])->name('tarea.create');
Route::post('tarea/guardar', [TareaController::class, 'store'])->name('tarea.store');
