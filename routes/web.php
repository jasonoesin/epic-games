<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GameController::class, 'index']);
Route::get('/game/{id}', [GameController::class, 'detail']);
Route::get('/genre',[GenreController::class, 'index'] );
Route::get('/genre/{id}',[GenreController::class, 'detail'] );
