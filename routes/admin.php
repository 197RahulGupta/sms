<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SushmaController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('about',AboutController::class);
Route::resource('feature',FeatureController::class);
Route::resource('introduction',IntroductionController::class);
Route::resource('course',CourseController::class);
Route::resource('student',StudentController::class);