<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProgramStudy;

class ProgramStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); 
        ProgramStudy::truncate(); 
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Masukkan data program studi ke dalam tabel
        DB::table('program_studies')->insertOrIgnore([
            // Fakultas Teknik
            [
                'study_program_code' => 'TS01',
                'study_program_name' => 'Teknik Sipil',
                'faculty_id' => 1, // FK01
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'TM02',
                'study_program_name' => 'Teknik Mesin',
                'faculty_id' => 1, // FK01
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'TE03',
                'study_program_name' => 'Teknik Elektro',
                'faculty_id' => 1, // FK01
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'TK04',
                'study_program_name' => 'Teknik Kimia',
                'faculty_id' => 1, // FK01
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Ekonomi
            [
                'study_program_code' => 'M01',
                'study_program_name' => 'Manajemen',
                'faculty_id' => 2, // FK02
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'A02',
                'study_program_name' => 'Akuntansi',
                'faculty_id' => 2, // FK02
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Ilmu Komputer
            [
                'study_program_code' => 'TI01',
                'study_program_name' => 'Teknik Informatika',
                'faculty_id' => 3, // FK03
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'SI02',
                'study_program_name' => 'Sistem Informasi',
                'faculty_id' => 3, // FK03
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Hukum
            [
                'study_program_code' => 'IH01',
                'study_program_name' => 'Ilmu Hukum',
                'faculty_id' => 4, // FK04
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'HE02',
                'study_program_name' => 'Hukum Ekonomi',
                'faculty_id' => 4, // FK04
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Kedokteran
            [
                'study_program_code' => 'KU01',
                'study_program_name' => 'Kedokteran Umum',
                'faculty_id' => 5, // FK05
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'KG02',
                'study_program_name' => 'Kedokteran Gigi',
                'faculty_id' => 5, // FK05
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'KP03',
                'study_program_name' => 'Keperawatan',
                'faculty_id' => 5, // FK05
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'FT04',
                'study_program_name' => 'Fisioterapi',
                'faculty_id' => 5, // FK05
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'study_program_code' => 'FA05',
                'study_program_name' => 'Farmasi',
                'faculty_id' => 5, // FK05
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
