<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleModel;

class VehicleModelController extends Controller
{
    public function index(){
        $vehicle_models = VehicleModel::all();
        return view("vehicle_model.index", ['vehicle_models' => $vehicle_models]);
    }

    public function create(){
        return view("vehicle_model.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required'
        ]);

        $newVehicleModel = VehicleModel::create($data);

        return redirect(route('vehicle_model.index'));
    }

    public function edit(VehicleModel $vehicle_model){
        return view('vehicle_model.edit', ['vehicle_model'=> $vehicle_model]);
    }

    public function update(Request $request, VehicleModel $vehicle_model){
        $data = $request->validate([
            'name' => 'required'
        ]);

        $vehicle_model->update($data);

        return redirect(route('vehicle_model.index'))->with('success','Modelo salvo com sucesso');
    }

    public function delete(VehicleModel $vehicle_model){

        $vehicle_model->delete();

        return redirect(route('vehicle_model.index'))->with('success','Modelo excluído com sucesso');
    }
}
