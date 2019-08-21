<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('Home.index');
    }
     public function availableRestaurant(){
        $res = Restaurant::all();
        return view('Visitor.availableRestaurant',['res'=> $res]);
    }
}
