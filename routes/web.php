<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GameController::class, 'index']);
Route::get('/game/{id}', [GameController::class, 'detail']);
Route::post('/game/{id}',[WishlistController::class, 'wishlist']);

Route::get('/genre',[GenreController::class, 'index'] );
Route::get('/genre/{id}',[GenreController::class, 'detail'] );

Route::get('/wishlist',[WishlistController::class, 'index']);
Route::get('/owned',[OrderController::class, 'owned_index']);

Route::get('/login',[AuthController::class, 'login_index']);
Route::post('/login',[AuthController::class, 'login']);

Route::get('/logout',[AuthController::class, 'logout']);

Route::get('/register',[AuthController::class, 'register_index']);
Route::post('/register',[AuthController::class, 'register']);

Route::get('/account',[AuthController::class, 'account']);
Route::post('/account',[AuthController::class, 'update_account']);

Route::post('/order', [OrderController::class, 'index']);
Route::post('/order/{id}', [OrderController::class, 'order']);
