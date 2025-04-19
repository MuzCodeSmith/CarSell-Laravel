<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $cars = Car::get();
        
        // $cars = Car::where('published_at','!=',null)->get();
        
        // $cars = Car::where('published_at','!=',null)->first();
        
        // $cars = Car::orderBy('published_at','desc')->get();

        $cars = Car::where('published_at','!=',null)
        ->where('car_type_id',2)
        ->orderBy('published_at')
        ->limit(1)
        ->get();
        dump($cars);

        return view('home.index');
    }
}
