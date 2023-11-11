<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view("brand.index", ['brands' => $brands]);
    }

    public function create(){
        return view("brand.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required'
        ]);

        $newBrand = Brand::create($data);

        return redirect(route('brand.index'));
    }

    public function edit(Brand $brand){
        return view('brand.edit', ['brand'=> $brand]);
    }

    public function update(Request $request, Brand $brand){
        $data = $request->validate([
            'name' => 'required'
        ]);

        $brand->update($data);

        return redirect(route('brand.index'))->with('success','Marca salva com sucesso');
    }

    public function delete(Brand $brand){

        $brand->delete();

        return redirect(route('brand.index'))->with('success','Marca excluída com sucesso');
    }
}
