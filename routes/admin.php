<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentFeeController;
use App\Http\Controllers\SushmaController;
use App\Http\Controllers\TeacherController;
use App\Models\StudentFee;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('about',AboutController::class);
Route::resource('feature',FeatureController::class);
Route::resource('introduction',IntroductionController::class);
Route::resource('course',CourseController::class);
Route::resource('student',StudentController::class);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('teacher',TeacherController::class);
Route::resource('studentfee',StudentFeeController::class);
Route::get('students/{student}/fees', [StudentFeeController::class, 'studentFee'])
    ->name('studentFee.student');
Route::post('students/{student}/fees', [StudentFeeController::class, 'studentFeeStore'])
    ->name('studentFee.student.store');
Route::get('bill/{studentfee}',[StudentFeeController::class,'bill'])->name('bill');
