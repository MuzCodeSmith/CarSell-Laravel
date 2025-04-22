<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends EloquentModel
{
    use SoftDeletes, HasFactory;

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

    public function CarImage():HasMany{
        return $this->hasMany(CarImage::class);
    }

    public function carType():BelongsTo{
        return $this->belongsTo(CarType::class);
    }

    public function favouredUsers():BelongsToMany{
        return $this->belongsToMany(User::class,'favourite_cars');
    }

    public function fuelType():BelongsTo{
        return $this->belongsTo(FuelType::class);
    }

    public function maker():BelongsTo{
        return $this->belongsTo(Maker::class);
    }
    public function model():BelongsTo{
        return $this->belongsTo(Model::class);
    }
    public function owner():BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
    public function city():BelongsTo{
        return $this->belongsTo(City::class);
    }
    public function getCreatedDate():string{
        return (new Carbon($this->created_at))->format('Y-m-d');
    }
}
