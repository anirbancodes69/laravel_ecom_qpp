<?php

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
    return view('frontend.content.home.index');
})->name('home.index');

Route::get('/shop', function () {
    return view('frontend.content.shop.index');
})->name('shop.index');

Route::get('/product', function () {
    return view('frontend.content.shop.product');
})->name('shop.product');

Route::get('/checkout', function () {
    return view('frontend.content.order.checkout');
})->name('order.checkout');

Route::get('/dashboard', function () {
    return view('frontend.content.user_account.dashboard');
})->name('order.checkout');