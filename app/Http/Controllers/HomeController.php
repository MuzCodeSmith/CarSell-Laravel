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
        $car = Car::find(15);

        // creating new single image for  car 

        // approach 1
        // $carImage = new CarImage([
        //     'position' => 1,
        //     'image_path' => 'image1'
        // ]);

        // $car->images()->save($carImage);

        // // approach 2 
        // $car->images()->create([
        //     'position' => 2,
        //     'image_path' => 'image2'
        // ]);

        // creating records in bulk
        // apporch 1
        // $car->images()->saveMany([
        //     new CarImage(['position' => 3,'image_path' => 'image3']),
        //     new CarImage(['position' => 34,'image_path' => 'image4'])
        // ]);

        // apporch 2
        $car->images()->createMany([
            ['position' => 3,'image_path' => 'image3'],
            ['position' => 4,'image_path' => 'image4']
        ]);


        // dump($car->images);
        
        return view('home.index');
    }
}
