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

Route::get('/admin/viewProducts', [ProductController::class, 'viewProducts']);
Route::get('/addProduct', [ProductController::class, 'view']);
Route::post('/addProduct', [ProductController::class, 'addProduct']);
Route::get('/updateProduct', function (){
    return view('updateProduct');
});
Route::post('/updateProduct', [ProductController::class, 'updateProduct']);
Route::post('deleteProduct/{id}',[ProductController::class, 'deleteProduct']);