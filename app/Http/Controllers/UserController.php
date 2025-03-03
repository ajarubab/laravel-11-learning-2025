<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
    
    function getNameInView($nm){
        // echo "The Name : ".$nm;
        return view("user", ['naam' => $nm]);
    }

    function adminLogin(){
        if(View::exists('admin.sign')){
        // if(View::exists('admin.login')){
            // return view("admin.login");
            return view("admin.sign");
        }else{
            echo "No View Found";
        }
    }
}
