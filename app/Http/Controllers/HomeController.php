<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarFeatures;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // get car data
        $car = Car::find(16);

        $carFeats = new CarFeatures([
            'abs' => true,
            'air_conditioning' => true,
            'power_windows' => false,
            'cruise_control' => true,
            'power_door_locks' => false,
            'remote_start' => true,
            'bluetooth_connectivity' => false,
            'gps_navigation' => false,
            'leather_seats' => false,
            'rear_parking_sensors' => false,
            'climate_control' => false,
            'heated_seats' => false,
        ]);

        $car->features()->save($carFeats);
        
        return view('home.index');
    }
}
