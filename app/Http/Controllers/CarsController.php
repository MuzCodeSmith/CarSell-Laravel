<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(5)
        ->cars()
        ->with(['primaryImage','maker','model'])
        ->orderBy('created_at','desc')->get();
        return view('car.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
    public function search(){
        $query= Car::where('published_at','<',now())
        ->with(['primaryImage','city','carType','fuelType','maker','model'])
        ->orderBy('published_at','desc');

        $query->join('cities','cities.id','=','cars.city_id')
        ->where('cities.state_id',1);

        $carCount = $query->count();
        $cars = $query->limit(30)->get();
        return view('car.search',['cars'=>$cars, 'carCount'=>$carCount]);
    }

    public function watchlist(){
        $cars = User::find(4)->favouriteCars
        ->with(['primaryImage','city','carType','fuelType','maker','model'])
        ->get();
        return view('car.watchlist',['cars'=>$cars]);
    }
}
