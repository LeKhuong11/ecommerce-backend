<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use App\Http\Controllers\Customer\PolicyController;
use App\Http\Controllers\Customer\ContactController;
use App\Http\Controllers\Customer\AboutController;
use App\Http\Controllers\Customer\Auth\LoginController;
use App\Http\Controllers\Customer\Auth\SignupController;
use App\Http\Controllers\Customer\Auth\CartController;


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

Route::get('/', [HomeController::class, 'index'])->name('customer.home');
Route::get('/contact', [ContactController::class, 'index'])->name('customer.contact');
Route::get('/about', [AboutController::class, 'index'])->name('customer.about');
Route::get('/login', [LoginController::class, 'index'])->name('customer.login');
Route::get('/signup', [SignupController::class, 'index'])->name('customer.signup');
Route::get('/cart', [CartController::class, 'index'])->name('customer.cart');
Route::get('/product/detail/123', [ProductController::class, 'index'])->name('customer.detail');

Route::prefix('page')->group(function () {
    Route::get('/privacy-policy', [PolicyController::class, 'privacyPolicy'])->name('customer.privacy-policy');
    Route::get('/shipping-policy', [PolicyController::class, 'shippingPolicy'])->name('customer.shipping-policy');
    Route::get('/payment-policy', [PolicyController::class, 'paymentPolicy'])->name('customer.payment-policy');
    Route::get('/return-policy', [PolicyController::class, 'returnPolicy'])->name('customer.return-policy');
    Route::get('/shopping-guide', [PolicyController::class, 'shoppingGuide'])->name('customer.shopping-guide');
});