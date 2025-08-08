<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function show(){
        $name="test name太郎";
        $age=20;

        return view("profile",["name"=>$name,"age"=>$age]);
    }
}
