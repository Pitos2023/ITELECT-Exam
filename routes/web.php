<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Log in Forms

Route::get('/login', function () {
    return view('loginform.login');
});

Route::get('/register', function () {
    return view('loginform.register');
});

//Grocery List

Route::get('/home', function () {
    return view('grocery.homepage');
});
