<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $fillable = [
        'name',
        'region_id',
        'capacity',
        'base_fare',
        'minimum_fare',
        'minimum_distance',
        'per_distance',
        'per_minute_drive',
        'per_minute_wait',
        'waiting_time_limit',
        'cancellation_fee',
        'payment_method',
        'commission_type',
        'admin_commission',
        'fleet_commission',
        'status',
        'description',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
