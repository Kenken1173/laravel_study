<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile',[ProfileController::class, "show"]);

Route::get('/favorites',[FavoriteController::class,"showFavorites"]);