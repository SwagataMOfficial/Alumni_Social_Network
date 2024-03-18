<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/profile/posts/{user_token}", [ProfileController::class, "profile"]);
Route::get("/profile/images/{user_token}", [ProfileController::class, "images"]);
Route::get("/profile/jobs/{user_token}", [ProfileController::class, "jobs"]);