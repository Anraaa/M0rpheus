<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan Roles ada
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        $mhsRole = Role::firstOrCreate(['name' => 'mahasiswa', 'guard_name' => 'web']);

        // Kaitkan role super_admin dengan email
        $adminUser = User::where('email', 'admin@admin.com')->first();
        $mhsUser = User::where('email', 'aqla@mhs.com')->first();

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
        if ($mhsUser) {
            $mhsUser->assignRole($mhsRole);
        }
    }
}
