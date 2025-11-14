<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Admin',
            'Driver',
            'Rider',
        ];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Assign permissions
        $admin = Role::where('name', 'Admin')->first();
        $driver = Role::where('name', 'Driver')->first();
        $rider = Role::where('name', 'Rider')->first();

        // Admin gets all permissions
        $admin->syncPermissions(Permission::all());

        // Driver limited permissions
        $driver->syncPermissions([
            'driver.access',
            'riderequest.view',
            'report.view',
        ]);

        // Rider limited permissions
        $rider->syncPermissions([
            'rider.list',
            'rider.add',
            'booknow.access',
        ]);

        $this->command->info('✅ Roles and permissions assigned successfully.');
    }
}
