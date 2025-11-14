<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            // Main Menu
            ['name' => 'booknow.access'],
            ['name' => 'dashboard.view'],

            // User Management
            ['name' => 'usermanagement.access'],

            // Rider
            ['name' => 'rider.list'],
            ['name' => 'rider.add'],

            // Sub Admin
            ['name' => 'subadmin.add'],
            ['name' => 'subadmin.list'],

            // Driver
            ['name' => 'driver.access'],

            // Admin Login History
            ['name' => 'adminloginhistory.view'],

            // Location Management
            ['name' => 'region.manage'],
            ['name' => 'service.manage'],
            ['name' => 'zone.manage'],
            ['name' => 'zoneprice.manage'],
            ['name' => 'riderequest.view'],
            ['name' => 'driverlocation.view'],
            ['name' => 'highdemandareas.manage'],
            ['name' => 'document.manage'],
            ['name' => 'airport.manage'],

            // Financial Management
            ['name' => 'coupon.manage'],
            ['name' => 'withdrawrequest.manage'],
            ['name' => 'payment.manage'],
            ['name' => 'additionalfees.manage'],

            // Support Management
            ['name' => 'complaint.manage'],
            ['name' => 'surgeprice.manage'],
            ['name' => 'cancelreason.manage'],
            ['name' => 'sos.manage'],
            ['name' => 'referenceprogram.manage'],

            // Notification Management
            ['name' => 'pushnotification.manage'],
            ['name' => 'mailtemplate.manage'],
            ['name' => 'smstemplate.manage'],

            // Report Management
            ['name' => 'report.view'],

            // Page Management
            ['name' => 'pages.manage'],
            ['name' => 'faq.manage'],

            // System Settings
            ['name' => 'accountsetting.manage'],
            ['name' => 'applanguagesetting.manage'],
            ['name' => 'setting.manage'],
            ['name' => 'websitesection.manage'],
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate($permission);
        }

        $this->command->info('✅ Permissions seeded successfully.');
    }
}
