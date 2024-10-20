<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Auth\UserAuthController;
use App\Http\Controllers\Frontend\Account\UserAccountController;

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

include('admin.php');

Route::middleware('guest')->group(function () {
    Route::get('login', [UserAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [UserAuthController::class, 'login'])->name('login.submit');
    Route::get('register', [UserAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [UserAuthController::class, 'register'])->name('register.submit');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [UserAuthController::class, 'logout'])->name('logout');
    Route::get('account', [UserAccountController::class, 'index'])->name('account');
});

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