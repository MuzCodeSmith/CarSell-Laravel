<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function Welcome(){
        return view('hello.welcome',['name'=>'muzzu','sirname'=>'shaikh']);
    }
}
