<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get(
    '/trainers',
'TrainersController@allData'
)->name('all-trainers');

Route::get('/users', function () {
    return view('users');
})->name('all-users');

Route::get('/typeclasses', function () {
    return view('users');
})->name('type-classes');

Route::post(
    '/trainers/submit',
    'TrainersController@submit'
)->name('post-trainer');
