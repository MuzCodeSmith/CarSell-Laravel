<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;

// Route::get('/', function () {
//     return view('welcome');
// });
// optional routing
// Route::get('/products/{id?}', function ($id=null) {
//     if(!$id){
//         return "All Product";
//     }
//     return "product id: $id";
// });

// route validation -----------------------

// example 1: only number
// Route::get('/user/{id}',function($id){
//     return "user id: $id";
// })->whereNumber('id');

// example 2: only alphabets
// Route::get('/category/{category}',function($category){
//     return "category type: $category";
// })->whereAlpha('category');

// example 3: alphanumric value
// Route::get('/username/{username}',function($username){
//     return "username: $username";
// })->whereAlphaNumeric('username');

// example 4: must match one of the array element
//  Route::get('/lang/{lang}',function($lang){
//     return "language: $lang";
// })->whereIn('lang',['en','hi','ur']);

// example 5: Regex - only lowercase letters
// Route::get('/pass/{pass}',function($pass){
//     return "language: $pass";
// })->where('pass','[a-z]+');

// example 6: Regex - for multipe values
// Route::get('/lang/{lang}/course/{coursId}',function($lang,$coursId){
//     return "course: $coursId and language: $lang";
// })->where(['lang'=>'[a-z]{2}','coursId'=>'\d{4}']);

// example 7: Regex - with special chars
// Route::get('/search/{query}',function($query){
//     return "search query:$query";
// })->where('query','.+');

//named routes ----------------------

// route::get('userProfile',function(){
//     return 'user';
// })->name('user');

// route::get('user',function(){
//     // return redirect()->route('user');
//     return to_route('user');
// });
// route::get('current-user',function(){
//     // return redirect()->route('user');
//     return to_route('user');
// });

//route group
// route::prefix('admin')->group(function(){
//     Route::get('/settings',function(){
//         return "admin settings";
//     });
//     Route::get('/profile',function(){
//         return "profile";
//     });
// });

// fallback
// Route::fallback(function(){
//     return 'fallback route';
// });

// challenge: return some of route parameters
// Route::get('/sum/{num1}/{num2}',function($num1,$num2){
//     return "sum: $num1 + $num2 is".$num1+$num2;
// })->whereNumber('num1','num2');

// ----------------------------------------------------------------------------

// controllers 
// Route::get('/users',[UserController::class,'index']);

// controller group
// Route::controller(UserController::class)->group(function(){
//     Route::get('/users','index');
//     Route::get('/user-setting','setting');
// });

// Route::get('/cars',CarController::class);
// Route::get('/cars',[CarController::class,'index']);



// Challenge:
// Create HelloController with welcome method. Create welcome view using artisan and put it in hello subfolder. From HelloController::welcome method render welcome view you just created.
// Pass your name and surname to the view and output it in blade file. Define route /hello so that when you access it, it will output your name and surname.

Route::get('/hello',[HelloController::class,'Welcome']);

