<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

//Authentication
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/login', [UserController::class, 'loginUser']);
Route::get('/logout', [UserController::class, 'logoutUser']);
Route::post('/register', [UserController::class, 'createUser']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.show');
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('user.edit');
    Route::patch('/profile/{user}', [UserController::class, 'updateProfile'])->name('user.update');
    Route::get('/profile/changePassword', [UserController::class, 'changePassword'])->name('user.password');
    Route::patch('/profile/{user}/changePassword', [UserController::class, 'updatePassword'])->name('user.password.update');
});
