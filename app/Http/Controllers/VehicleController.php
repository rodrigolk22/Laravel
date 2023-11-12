<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all();
        return view("vehicle.index", ['vehicles' => $vehicles]);
    }

    public function create(){
        return view("vehicle.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'model_id' => 'required',
            'price' => 'required',
            'image_path' => 'required|image'
        ]);

        $path = request()->file('image_path')->store('public/images');

        $data['image_path'] = str_replace("public/", "", $path);

        $newvehicle = Vehicle::create($data);

        return redirect(route('vehicle.index'));
    }

    public function edit(Vehicle $vehicle){
        return view('vehicle.edit', ['vehicle'=> $vehicle]);
    }

    public function update(Request $request, Vehicle $vehicle){
        $data = $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'model_id' => 'required',
            'price' => 'required',
            'image_path' => 'required|image'
        ]);

        $path = request()->file('image_path')->store('public/images');

        $data['image_path'] = str_replace("public/", "", $path);

        $vehicle->update($data);

        return redirect(route('vehicle.index'))->with('success','Veículo salvo com sucesso');
    }

    public function delete(Vehicle $vehicle){

        $vehicle->delete();

        return redirect(route('vehicle.index'))->with('success','Veículo excluído com sucesso');
    }
}
