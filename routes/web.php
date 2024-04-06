<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// common navigation views
Route::get("/friends", [ViewsController::class, "friends"]);
Route::get("/messages", [ViewsController::class, "messages"]);
Route::get("/notifications", [ViewsController::class, "notifications"]);
Route::get("/settings/{any}/{user_token}", [ProfileController::class, "view_settings"])->middleware('settings_guard');
// Route::get("/settings/{any}/{user_token}", [ProfileController::class, "view_settings"]);


Route::group(['prefix' => '/profile'], function () {
    Route::get("/feed", [ProfileController::class, 'view_search']);
    // {any} means after /profile there can be any routing names and {user_token} means the id of the user
    Route::get("/{any}/{user_token}", [ProfileController::class, "view_page"])->middleware('profile_guard');
});

Route::middleware(['LoginCheck'])->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get("/feed", [ViewsController::class, "index"])->name('feed');
    // Route::get('/profile', [UserController::class, 'profile'])->name('profile');
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



