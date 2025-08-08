<?php

namespace App\Http\Controllers;

class FavoriteController extends Controller{
    public function showFavorites(){
        $favoriteFood = "寿司";
        return view("favorites",["favoriteFood" => $favoriteFood]);
    }
}