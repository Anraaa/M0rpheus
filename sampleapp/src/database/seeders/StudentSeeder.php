<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bersihkan tabel
        DB::table('students')->truncate();

        // Data mahasiswa
        $students = [
            // Fakultas Teknik
            [
                'nim' => '20230801001',
                'name' => 'John Doe',
                'dob' => Carbon::parse('2000-01-01'),
                'program_study_id' => 1, // Teknik Sipil
                'faculty' => 'Fakultas Teknik',
                'admission_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230801002',
                'name' => 'Jane Smith',
                'dob' => Carbon::parse('1999-04-15'),
                'program_study_id' => 2, // Teknik Mesin
                'faculty' => 'Fakultas Teknik',
                'admission_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Ekonomi
            [
                'nim' => '20230802001',
                'name' => 'Michael Johnson',
                'dob' => Carbon::parse('2001-05-20'),
                'program_study_id' => 5, // Manajemen
                'faculty' => 'Fakultas Ekonomi',
                'admission_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230802002',
                'name' => 'Emily Clark',
                'dob' => Carbon::parse('2000-11-10'),
                'program_study_id' => 6, // Akuntansi
                'faculty' => 'Fakultas Ekonomi',
                'admission_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Ilmu Komputer
            [
                'nim' => '20230803001',
                'name' => 'Chris Lee',
                'dob' => Carbon::parse('2002-02-25'),
                'program_study_id' => 7, // Teknik Informatika
                'faculty' => 'Fakultas Ilmu Komputer',
                'admission_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230803002',
                'name' => 'Sophia Davis',
                'dob' => Carbon::parse('2001-09-30'),
                'program_study_id' => 8, // Sistem Informasi
                'faculty' => 'Fakultas Ilmu Komputer',
                'admission_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Hukum
            [
                'nim' => '20230804001',
                'name' => 'Liam Walker',
                'dob' => Carbon::parse('1998-07-12'),
                'program_study_id' => 9, // Ilmu Hukum
                'faculty' => 'Fakultas Hukum',
                'admission_year' => 2022,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230804002',
                'name' => 'Ava Scott',
                'dob' => Carbon::parse('2000-03-22'),
                'program_study_id' => 10, // Hukum Ekonomi
                'faculty' => 'Fakultas Hukum',
                'admission_year' => 2022,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Fakultas Kedokteran
            [
                'nim' => '20230805001',
                'name' => 'Noah White',
                'dob' => Carbon::parse('1997-12-05'),
                'program_study_id' => 11, // Kedokteran Umum
                'faculty' => 'Fakultas Kedokteran',
                'admission_year' => 2022,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '20230805002',
                'name' => 'Isabella Martinez',
                'dob' => Carbon::parse('2001-08-13'),
                'program_study_id' => 12, // Kedokteran Gigi
                'faculty' => 'Fakultas Kedokteran',
                'admission_year' => 2022,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];        

        // Insert data
        DB::table('students')->insertOrIgnore($students);
    }
}
