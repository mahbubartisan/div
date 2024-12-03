<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


Route::get('/', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    // Route::get('/add-user', [UserController::class, 'create']);
    Route::post('/add-user', [UserController::class, 'store']);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::post('/add-user', [UserController::class, 'store']);