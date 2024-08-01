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

Route::get('/test/{name?}/{age?}', function($name='user', $age=20) {
    return view('test')->with('name', $name)->with('age', $age);
});