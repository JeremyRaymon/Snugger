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
});

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

Route::get('/productList', [ProductController::class, 'showAllProducts']);

Route::get('/shoppingCart', function(){
    return view('shoppingCart');
});

Route::get('/wishList', function(){
    return view('wishList');
});