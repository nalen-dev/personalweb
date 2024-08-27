<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/projects', function () {
    return view('projects');
});