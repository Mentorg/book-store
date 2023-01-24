<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Misc
        $miscPermission = Permission::create(['name' => "N/A"]);

        // Book Model
        $bookPermission1 = Permission::create(['name' => "create: book"]);
        $bookPermission2 = Permission::create(['name' => "update: book"]);
        $bookPermission3 = Permission::create(['name' => "delete: book"]);

        // Create Roles
        $userRole = Role::create(['name' => "user"])->syncPermissions([
            $miscPermission
        ]);

        $adminRole = Role::create(['name' => "admin"])->syncPermissions([
            $bookPermission1,
            $bookPermission2,
            $bookPermission3,
        ]);

        // Create staff & users
        User::create([
            'name' => "admin",
            'is_admin' => 1,
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'), //password
            'remember_token' => Str::random(10),
        ])->assignRole($adminRole);

        User::create([
            'name' => "Test ",
            'is_admin' => 0,
            'email' => "test@test.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ])->assignRole($userRole);
    }
}
