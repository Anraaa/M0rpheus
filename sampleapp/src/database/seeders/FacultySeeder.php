<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faculty; // Pastikan namespace model Faculty benar
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); 
        Faculty::truncate(); 
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 

        // Tambahkan data fakultas
        $faculties = [
            [
                'faculty_code' => 'FK01',
                'faculty_name' => 'Teknik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'faculty_code' => 'FK02',
                'faculty_name' => 'Ekonomi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'faculty_code' => 'FK03',
                'faculty_name' => 'Ilmu Komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'faculty_code' => 'FK04',
                'faculty_name' => 'Hukum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'faculty_code' => 'FK05',
                'faculty_name' => 'Kedokteran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Lakukan batch insert
        Faculty::insert($faculties);
    }
}
