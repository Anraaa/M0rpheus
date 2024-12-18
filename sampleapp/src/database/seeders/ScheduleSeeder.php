<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedules;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('schedules')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        DB::table('schedules')->insertOrIgnore([
            [
                'day' => 'Senin',
                'date' => '2024-11-13',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
                'duration_time' => '2 Jam',
                'course_name' => 'Design dan Analisis Algoritma',
                'meeting_number' => 1,
                'lecturer' => 'Jefry Sunupurwa',
                'room' => 'CR. 506'
            ],
            [
                'day' => 'Senin',
                'date' => '2024-11-13',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
                'duration_time' => '2 Jam',
                'course_name' => 'Basis Data',
                'meeting_number' => 1,
                'lecturer' => 'Ranny Melia',
                'room' => 'CR. 403'
            ],
            [
                'day' => 'Senin',
                'date' => '2024-11-13',
                'start_time' => '13:00:00',
                'end_time' => '15:00:00',
                'duration_time' => '2 Jam',
                'course_name' => 'Kalkulus 2',
                'meeting_number' => 1,
                'lecturer' => 'Suryani',
                'room' => 'CR. 505'
            ],
        ]);
    }
}
