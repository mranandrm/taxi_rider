<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBankAccount extends Model
{
     protected $fillable = [
        'user_id',
        'bank_name',
        'bank_code',
        'account_holder_name',
        'account_number',
        'bank_address',
        'routing_number',
        'bank_iban',
        'bank_swift',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
