<?php

use App\Http\Controllers\AmazingProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [GlobalController::class, 'index'])
    ->name('home');

Route::get('amazingproduct/{amazingProduct}', AmazingProductController::class)
    ->name('amazingproduct.show');

Route::post('cart', [CartController::class, 'addToCart'])
    ->name('cart.store');

Route::get('cart', [CartController::class, 'cartList'])
    ->name('cart.list');

Route::get('cart/order',[OrderController::class, 'order'])
    ->name('cart.order');
Route::post('cart/order',[OrderController::class, 'orderStore'])
    ->name('cart.order.store');



