<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/trainers', function () {
    return view('trainers');
});

Route::get('/users', function () {
    return view('users');
});