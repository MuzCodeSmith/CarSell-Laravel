<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // get car data
        $car = Car::find(15);


        // and updating data with releationship

        // approach 1
        // $car->features->update(['power_door_locks'=>1]);

        // approach 2
        // $car->features->abs=0;
        // $car->save();

        // deleting record using reletionship 
        $car->primaryImage->delete();
        // dump($car->features);
        dump($car->primaryImage);

        
        return view('home.index');



    }
}
