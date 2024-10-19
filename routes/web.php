<?php

use App\Http\Controllers\Account\UserAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\HomeController;

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

include('admin/admin.php');

include('auth.php');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/shop', function () {
    return view('frontend.content.shop.index');
})->name('shop.index');

Route::get('/product', function () {
    return view('frontend.content.shop.product');
})->name('shop.product');

Route::get('/checkout', function () {
    return view('frontend.content.order.checkout');
})->name('order.checkout');