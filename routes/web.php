<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleModelController;
use App\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /* Profile routes */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /* Vehicle routes */
    Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicle', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('/vehicle/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicle/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicle/{vehicle}/delete', [VehicleController::class, 'delete'])->name('vehicle.delete');
    /* Vechicle model routes */
    Route::get('/vehicle_model', [VehicleModelController::class, 'index'])->name('vehicle_model.index');
    Route::get('/vehicle_model/create', [VehicleModelController::class, 'create'])->name('vehicle_model.create');
    Route::post('/vehicle_model', [VehicleModelController::class, 'store'])->name('vehicle_model.store');
    Route::get('/vehicle_model/{vehicle_model}/edit', [VehicleModelController::class, 'edit'])->name('vehicle_model.edit');
    Route::put('/vehicle_model/{vehicle_model}/update', [VehicleModelController::class, 'update'])->name('vehicle_model.update');
    Route::delete('/vehicle_model/{vehicle_model}/delete', [VehicleModelController::class, 'delete'])->name('vehicle_model.delete');
    /* Brand routes */
    Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brand/{brand}/update', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brand/{brand}/delete', [BrandController::class, 'delete'])->name('brand.delete');
});

require __DIR__.'/auth.php';
