<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/mainpage', [MainController::class, 'index'])->name('main');

    Route::get('/itempage/{item}', [MainController::class, 'showItem'])->name('item');

    Route::get('/cartpage', [MainController::class, 'cart'])->name('cart');

    Route::get('buy-now/{product_id}',[MainController::class, 'buyNow'])->name('buy-now');

    Route::get('add-to-cart/{product_id}',[MainController::class, 'addToCart'])->name('add-to-cart');

    Route::get('qty-increment/{rowId}', [MainController::class, 'qtyIncrement'])->name('qty-increment');
    Route::get('qty-decrement/{rowId}', [MainController::class, 'qtyDecrement'])->name('qty-decrement');
    Route::get('remove-product/{rowId}', [MainController::class, 'removeProduct'])->name('remove-product');

    


    Route::get('/profilepage', [ProfileController::class, 'index'])->name('profile');

    Route::get('/cartpage', [CartController::class, 'index'])->name('cart');
});



Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




