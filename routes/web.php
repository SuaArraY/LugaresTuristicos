<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/',[ImageController::class, 'index']);
Route::get('/images',[ImageController::class, 'index']);
Route::get('/images/create',[ImageController::class, 'create']);
Route::post('/images/create',[ImageController::class, 'store']);
