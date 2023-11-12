<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = "vehicle";
    protected $fillable = [
        'name',
        'brand_id',
        'model_id',
        'price',
        'image_path'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class)->withDefault();
    }

    public function model()
    {
        return $this->belongsTo(VehicleModel::class)->withDefault();
    }
}
