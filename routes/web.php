<?php

use Illuminate\Support\Facades\Route;

Route::get('/abc', function(){
    return "Jai Siya Ram";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});
Route::view('/home',"home");

Route::get('/homeWithoutBlade', function(){
    return view('homeWithNoBlade');
});
