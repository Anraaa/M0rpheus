<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        $this->call([
            FacultySeeder::class, 
            ProgramStudySeeder::class,
            StudentSeeder::class,
            ScheduleSeeder::class
        ]);

        // Seed users after roles exist
        $this->seedUsers();
    }

    private function seedUsers(): void
    {
        // Buat akun admin jika tidak ada
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }
        // Buat akun mhs jika tidak ada
        $mhsEmail = 'aqla@mhs.com';
        if (! User::where('email', $mhsEmail)->exists()) {
            $mhs = User::create([
                'name' => 'Aqla Harun Ramadhani Johananda',
                'email' => $mhsEmail,
                'password' => bcrypt('password'),
            ]);
            $mhs->assignRole('mahasiswa');
        }
    }
}
