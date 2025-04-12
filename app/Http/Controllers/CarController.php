<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return "__invoked";
    }

    public function index(){
        return view('Home.home');
    }
}
