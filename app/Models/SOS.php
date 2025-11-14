<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SOS extends Model
{
     protected $fillable = [
        'region_id',
        'title',
        'contact_number',
        'status',
        'added_by',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class,'added_by');
    }
}
