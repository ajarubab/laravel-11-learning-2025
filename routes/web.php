<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/abc', function(){
    return "Jai Siya Ram";
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

// two ways of rendering a view 17 - 20
Route::get('/home', function(){
    return view('home');
});
Route::view('/home',"home");

Route::get('/homeWithoutBlade', function(){
    return view('homeWithNoBlade');
});

Route::get('/home/{nm}', function($nm){
    return view("home", ['name' => $nm]);
});

// two ways of redirection 30 - 33
Route::get('/rd', function(){
    return redirect('welcome');
});
Route::redirect('/rd','welcome');

Route::get('/greet',[UserController::class,'sayHello']);
Route::get('/greet/{nm}',[UserController::class,'getName']);
