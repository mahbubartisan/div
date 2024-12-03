<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected route example
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');