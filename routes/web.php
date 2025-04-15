<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

Route::get('/',[HomeController::class,'index']);
Route::get('/signup',[SignupController::class,'create']);
Route::get('/login',[LoginController::class,'create']);
