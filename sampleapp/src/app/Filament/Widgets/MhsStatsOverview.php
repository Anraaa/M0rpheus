<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Student;
use App\Models\ProgramStudy;
use App\Models\Faculty;

class MhsStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalMahasiswa = Student::count();
        $totalProdi = ProgramStudy::count();
        $totalFakultas = Faculty::count();
    
        return [
            Stat::make('Mahasiswa', $totalMahasiswa)
                ->description('Total Mahasiswa Terdaftar')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('primary'),
            Stat::make('Program Studi', $totalProdi)
                ->description('Total Program Studi')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success'),
            Stat::make('Fakultas', $totalFakultas)
                ->description('Total Fakultas')
                ->descriptionIcon('heroicon-m-building-library')
                ->color('info'),
        ];
    }
}
