<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('homepage');
});

Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);
Route::get('/', function () {
    return view('homepage');
})->name('homepage');
