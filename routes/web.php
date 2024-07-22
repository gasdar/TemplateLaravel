<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name?}', function($name = "User") {
    return view("home")->with("name", $name);
});

Route::get('/app', function() {
    return view("app");
});

Route::get('/login', function() {
    return view("login");
});
