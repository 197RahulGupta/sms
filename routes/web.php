<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SushmaController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'index'])->name('home');



Route::get('register',[AuthController::class,'registerPage'])->name('registerPage');
Route::post('register',[AuthController::class,'register'])->name('register');
Route::get('login',[AuthController::class,'loginPage'])->name('loginPage');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::resource('enquiry',EnquiryController::class);


