<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TareaController;

// Route::get('/', function () {
//     return view('layouts.app');
// });


Route::get('/',[ImageController::class, 'index'])->name('images.index');
// Route::get('images',[ImageController::class, 'index'])->name('images.index');
Route::get('/images/create',[ImageController::class, 'create'])->name('images.create');
Route::post('/images/create',[ImageController::class, 'store']);

Route::get('tarea/registrar', [TareaController::class ,'create'])->name('tarea.create');
Route::post('tarea/guardar', [TareaController::class, 'store'])->name('tarea.store');
Route::get('tarea/confirmacion', [TareaController::class, 'index'])->name('tarea.index');

