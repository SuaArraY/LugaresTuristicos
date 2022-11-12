<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ImageController;

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', [ImageController::class, 'index']);