<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;

Route::get('/', [HomeController::class, "show"]);

Route::get('/profile',[ProfileController::class, "show"]);

Route::get('/activity',[ActivityController::class,"showActivity"]);