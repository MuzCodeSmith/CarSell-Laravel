<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarsController;

Route::get('/',[HomeController::class,'index']);
Route::get('/car/search',[CarsController::class,'search'])->name('car.search');
Route::get('/car/watchlist',[CarsController::class,'watchlist'])->name('car.watchlist');
Route::resource('car',CarsController::class);
Route::get('/signup',[SignupController::class,'create'])->name('signup');
Route::get('/login',[LoginController::class,'create'])->name('login');
