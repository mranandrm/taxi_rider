<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'otp',
        'country_code',
        'contact_number',
        'gender',
        'address',
        'player_id',
        'service_id',
        'fleet_id',
        'latitude',
        'longitude',
        'last_notification_seen',
        'status',
        'is_online',
        'is_available',
        'is_verified_driver',
        'uid',
        'fcm_token',
        'timezone',
        'last_location_update_at',
        'otp_verify_at',
        'otp_expires_at',
        'last_actived_at',
        'app_version',
        'referral_code',
        'partner_referral_code',
        'currentHeading',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasRole(['Admin']);
    }
}
