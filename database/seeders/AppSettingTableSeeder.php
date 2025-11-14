<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSetting;

class AppSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppSetting::create([
            'site_name' => 'My Blood Bank',
            'site_email' => 'info@bloodbank.com',
            'site_logo' => 'logos/default_logo.png',
            'site_favicon' => 'favicon/default_favicon.png',
            'site_description' => 'A centralized blood bank management system to connect donors and recipients.',
            'site_copyright' => '© ' . date('Y') . ' My Blood Bank. All rights reserved.',
            'facebook_url' => 'https://facebook.com/bloodbank',
            'twitter_url' => 'https://twitter.com/bloodbank',
            'linkedin_url' => 'https://linkedin.com/company/bloodbank',
            'language_option' => 'english', 
            'contact_email' => 'support@bloodbank.com',
            'contact_number' => '+91 9876543210',
            'instagram_url' => 'https://instagram.com/bloodbank',
            'notification_settings' => 'enabled',
            'help_support_url' => 'https://bloodbank.com/help',
        ]);
    }
}
