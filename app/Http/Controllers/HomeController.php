<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // $car = Car::find(1);
        // $car->price = 12000;
        // $car->save(); 

        // Create or update
        // $car = Car::updateOrCreate(
        //     ['vin'=>666,'price'=>35000],
        //     ['vin'=>999],
        // );

        // mass update
            $car = Car::where('vin',6)->where('price',35000)->update(['vin'=>222]);


        return view('home.index');
    }
}
