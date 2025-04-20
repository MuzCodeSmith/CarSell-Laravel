<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // get car data
        $car = Car::find(16);

        // creating new image for  car 

        $carImage = new CarImage([
            'position' => 1,
            'image_path' => 'image1'
        ]);

        $car->images()->save($carImage);

        // dump($car->images);
        
        return view('home.index');
    }
}
