<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;

Route::get('/',[HomeController::class,'index']);
Route::get('/signup',[SignupController::class,'create']);
