<?php

namespace App\Http\Controllers;

class ActivityController extends Controller{
    public function showActivity(){
        $favoriteFood = "寿司";
        return view("activity",["favoriteFood" => $favoriteFood]);
    }
}