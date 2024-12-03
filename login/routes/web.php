<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


Route::controller(LoginController::class)->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});


Route::middleware(['auth'])->group(function () {
    // Add User Routes
    Route::post('/add-user', [UserController::class, 'store'])->name('add-user');

    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
