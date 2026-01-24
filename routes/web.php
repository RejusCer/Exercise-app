<?php

use App\Http\Controllers\ExerciseDayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\ExerciseDay;

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::get('/login', [UserController::class, 'loginPage'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('users.login');

Route::get('/register', [UserController::class, 'register'])->name('users.register');
Route::post('/register', [UserController::class, 'store'])->name('users.register');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ExerciseDayController::class, 'index'])->name('dashboard');

    Route::post('/logout', [UserController::class, 'logout'])->name('users.logout');
});

