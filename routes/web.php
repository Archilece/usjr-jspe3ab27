<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/show/students/all',function () {
    return view('/show/students/all');
});

Route::get('/show/students/{id}', function () {
    return view('/show/students/id');
});

Route::get('/show/colleges', function () {
    return view('/show/colleges');
});

Route::get('/show/colleges/{id}', function () {
    return view('/show/college/id');
});

Route::get('/show/departments', function () {
    return view('/show/departments');
});