<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware(['LoginCheck'])->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/logout', [UserController::class, 'logout'])->name('auth.logout');
});

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/forgot', [UserController::class, 'forgot'])->name('forgot');
Route::get('/reset_password/{email}/{token}', [UserController::class, 'reset_pass'])->name('Reset_Password');

// Ajax request sent using this route
Route::post("/register", [UserController::class, 'saveUser'])->name('auth.register');

// Ajax request sent using this route
Route::post("/login", [UserController::class, 'loginUser'])->name('auth.login');
Route::post("/forgot", [UserController::class, 'forgotPassword'])->name('auth.forgot');
Route::post("/resset-password", [UserController::class, 'update_password'])->name('auth.reset');



