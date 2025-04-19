<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // single record delete with softdelte
        // $car = Car::find(1);
        // $car->delete();

        // mass delete with softdelete
        // $cars = Car::where('vin',222)->where('price',35000)->delete();
        
        // actually delte database record
        Car::truncate();
        return view('home.index');


    }
}
