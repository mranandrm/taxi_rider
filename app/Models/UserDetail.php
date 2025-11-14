<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
   
    protected $fillable = [
        'user_id',
        'car_model',
        'car_color',
        'car_plate_number',
        'car_production_year',
        'work_address',
        'home_address',
        'work_latitude',
        'work_longitude',
        'home_latitude',
        'home_longitude',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
