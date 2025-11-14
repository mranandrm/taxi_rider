<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
   protected $fillable = [
        'name',
        'distance_unit',
        'coordinates',
        'status',
        'timezone',
    ];

    protected $casts = [
        'coordinates' => 'array',
        'status'      => 'boolean',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function sos()
    {
        return $this->hasMany(SOS::class);
    }
}
