<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'fuel_type_id',
        'car_type_id',
        'city_id',
        'user_id',
        'phone',
        'address',
        'description',
        'published_at',
    ];

    public function features():HasOne{
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage():HasOne{
        return $this->hasOne(CarImage::class)->oldestOfMany('position');
    }

    public function images():HasMany{
        return $this->hasMany(CarImage::class);
    }
}
