<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//show method http verb -> get
//store method http verb -> post
//update method http verb -> put
//index method http verb -> get
//destroy method http verb -> delete


Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resource('products', ProductsController::class);
    Route::post('/logout', [UserController::class,'logout']);
});

Route::post('/register', [UserController::class,'register']);
Route::post('/login', [UserController::class,'login']);
