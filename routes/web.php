<?php

use App\Http\Controllers\AmazingProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\OrderController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
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



Route::group([
    'middleware' => 'auth'
], function () {

    Route::get('/', [GlobalController::class, 'index'])
        ->name('home');

    Route::get('amazingproduct/{amazingProduct}', AmazingProductController::class)
        ->name('amazingproduct.show');

        Route::prefix('cart')->group(function(){

            Route::post('/', [CartController::class, 'addToCart'])
                ->name('cart.store');

            Route::get('/', [CartController::class, 'cartList'])
                ->name('cart.list');

            Route::get('/order',[OrderController::class, 'order'])
                ->name('cart.order');

            Route::post('/order',[OrderController::class, 'orderStore'])
                ->name('cart.order.store');

            Route::get('/allorders',[OrderController::class, 'index'])
                ->name('cart.allorders');
            });
            
    Route::get('comment/sore',[GlobalController::class,'commentStore'])
        ->name('commentstore');

    Route::get('/email', function(){
        Mail::to(auth()->user()->email)->send(new WelcomeMail());
        return new WelcomeMail();
        })->name('sendwelcomemail');

});


Route::prefix('signup')->group(function () {

    Route::get('/',[\App\Http\Controllers\AuthController::class,'showSignupForm'])
        ->name('auth.signup.form');

    Route::post('/',[\App\Http\Controllers\AuthController::class,'signup'])
        ->name('auth.signup');
    });

Route::prefix('signin')->group(function () {

    Route::get('',[\App\Http\Controllers\AuthController::class,'showSigninForm'])
        ->name('login');

    Route::post('',[\App\Http\Controllers\AuthController::class,'signin'])
        ->name('auth.signin');
    });

Route::get('signout',[AuthController::class,'logout'])
    ->name('auth.signout');





