<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // get car data
        $car = Car::find(15);

        
        // approch 1
        // $carType = CarType::where('name','Hatchback')->first();
        // approch 2
        // $cars = Car::whereBelongsTo($carType)->get();

        // udpating records using one to many relationship

        $carType = CarType::where('name','Hatchback')->first();

        // approch 1
        // $car->car_type_id = $carType->id;

        // approch 2
        $car->carType()->associate($carType);
        $car->save();

        
        return view('home.index');
    }
}
