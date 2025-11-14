<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
   protected $fillable = [
        'site_name',
        'site_email',
        'site_logo',
        'site_favicon',
        'site_description',
        'site_copyright',
        'facebook_url',
        'instagram_url',
        'support_number',
        'twitter_url',
        'linkedin_url',
        'language_option',
        'contact_email',
        'contact_number',
        'help_support_url',
        'notification_settings',
        'backup_type',
        'backup_email',
    ];
}
