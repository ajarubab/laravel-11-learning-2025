<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function sayHello(){
        return "Hello viewers";
    }

    function getName($name){
        return "Hello viewers, My Name is : " . $name;
    }

    function showUserView(){
        return view("user");
    }
}
