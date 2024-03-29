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
Route::get("/settings/{any}/{user_token}", [ProfileController::class, "view_settings"]);

// group routing [routes will contain '/profile' first then followed by other routing parameters]
Route::group(['prefix' => '/profile'], function () {
    // {any} means after /profile there can be any routing names and {user_token} means the id of the user
    Route::get("/{any}/{user_token}", [ProfileController::class, "view_page"])->middleware('profile_guard');
});