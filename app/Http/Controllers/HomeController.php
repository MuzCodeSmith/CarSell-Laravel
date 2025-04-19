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

        // $cars = Car::where('published_at','!=',null)
        // ->where('car_type_id',2)
        // ->orderBy('published_at')
        // ->limit(1)
        // ->get();
        // dump($cars);

      

        // approach 1
        $cardata = [
            'maker_id' => 1,
            'model_id' => 1,
            'price' => 35000,
            'year' => 2030,
            'vin' => 6,
            'mileage' => 2,
            'car_type_id' => 2,
            'fuel_type_id' => 2,
            'city_id' => 2,
            'user_id' => 1,
            'phone' => 9175826955,
            'address' => 'dummy adderss',
            'description' => 'dummy description',
            'published_at' => now(),
        ];
        // $record = Car::create($cardata);

    // Approach 2
    $car2 = new Car();
    $car2->fill($cardata);
    $car2->save();

    // Approch 3
    // $car3= new Car($cardata);
    // $car3->save();


        return view('home.index');
    }
}
