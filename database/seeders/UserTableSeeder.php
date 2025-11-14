<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin'),
            ]
        );
        $admin->assignRole('Admin');

        // Driver User
        $driver = User::firstOrCreate(
            ['email' => 'driver@gmail.com'],
            [
                'name' => 'Driver User',
                'password' => Hash::make('driver'),
            ]
        );
        $driver->assignRole('Driver');

        // Rider User
        $rider = User::firstOrCreate(
            ['email' => 'rider@gmail.com.com'],
            [
                'name' => 'Rider User',
                'password' => Hash::make('rider'),
            ]
        );
        $rider->assignRole('Rider');

        $this->command->info('✅ Admin, Driver, and Rider users created successfully.');
    }
}
