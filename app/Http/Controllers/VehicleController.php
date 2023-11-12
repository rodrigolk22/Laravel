<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Models\Brand;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::with('model', 'brand')->get();
        $viewData = ['vehicles'];
        return view("vehicle.index", compact($viewData));
    }

    public function create(){
        $vehicle_models = VehicleModel::all();
        $brands = Brand::all();
        $viewData = ['vehicle_models', 'brands'];
        return view("vehicle.create", compact($viewData));
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
        $vehicle_models = VehicleModel::all();
        $brands = Brand::all();
        $viewData = ['vehicle_models', 'brands', 'vehicle'];
        return view('vehicle.edit', compact($viewData));
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
