<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return 'user index';
    }
    function setting(){
        return 'user setting';
    }
}


