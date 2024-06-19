<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/show/students/all',[UniversityController::class,'showAllStudents']);
Route::get('/show/student/',[UniversityController::class,'showStudent']);
Route::get('/show/colleges',[UniversityController::class,'showAllColleges']);
Route::get('/show/college/',[UniversityController::class,'showCollege']);
Route::get('/show/departments',[UniversityController::class,'showAllDepartments']);


