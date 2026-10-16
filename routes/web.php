<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("home");
});

Route::get('/about', function () {
    $name = "Rikar";
    $age = 20;
    $password = "yang nanya wle";
    return view("about", compact('name', 'age', 'password'));
});

Route::get('/blog', function () {
    return view("blog");
});

Route::get('/contact', function () {
    return view("contact");
});
