<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// common navigation views
Route::get("/", [ViewsController::class, "index"]);
Route::get("/friends", [ViewsController::class, "friends"]);
Route::get("/messages", [ViewsController::class, "messages"]);
Route::get("/notifications", [ViewsController::class, "notifications"]);
Route::get("/settings", [ViewsController::class, "settings"]);

Route::get("/profile/posts/{user_token}", [ProfileController::class, "profile"]);
Route::get("/profile/images/{user_token}", [ProfileController::class, "images"]);
Route::get("/profile/jobs/{user_token}", [ProfileController::class, "jobs"]);
Route::get("/profile/settings/{user_token}", [ProfileController::class, "settings"]);