<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\bitacoraController;
Route::get('/a', function () {
    return view('welcome');
});


Route::get('/', [bitacoraController::class, 'index']);
Route::post('/plantilla', [bitacoraController::class, 'generateLayout'])->name('plantilla');

