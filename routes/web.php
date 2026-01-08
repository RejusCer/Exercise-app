<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [UserController::class, 'login'])->name('users.login');

Route::get('/register', [UserController::class, 'register'])->name('users.register');
Route::post('/register', [UserController::class, 'store'])->name('users.register');
