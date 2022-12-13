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


Route::get('/login',[AuthController::class, 'index']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/logout',[AuthController::class, 'logout']);
Route::get('/register',[AuthController::class, 'register']);

Route::post('/order', [OrderController::class, 'index']);
