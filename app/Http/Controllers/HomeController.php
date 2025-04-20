<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
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
        // dump($car->favouredUsers);

        // approch 2
        $user = User::find(1);

        // $user->favouriteCars()->detach(15);
        // $user->favouriteCars()->attach(15);
        $user->favouriteCars()->sync([]);

        dump($user->favouriteCars);

        return view('home.index');
    }
}
