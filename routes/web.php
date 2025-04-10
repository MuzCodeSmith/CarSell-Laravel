<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// optional routing
Route::get('/products/{id?}', function ($id=null) {
    if(!$id){
        return "All Products";
    }
    return "product id: $id";
});
