<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    public function index(){
        return view("vehicle_model.index");
    }
}
