<?php

namespace App\Filament\Mhs\Widgets;

use App\Models\Schedule;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;


class ScheduleWidget extends BaseWidget
{   
    // Pastikan tipe pengembalian sesuai dengan kontrak Filament
    protected function getTableQuery(): Builder
    {
        return Schedule::query(); // Query dari model Schedule
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('day')
                ->label('Day')
                ->sortable(),
            TextColumn::make('date')
                ->label('Date')
                ->sortable(),
            TextColumn::make('start_time')
                ->label('Start Time'),
            TextColumn::make('end_time')
                ->label('End Time'),
            TextColumn::make('duration_time')
                ->label('Duration'),
            TextColumn::make('course_name')
                ->label('Course Name'),
            TextColumn::make('meeting_number')
                ->label('Meeting Number'),
            TextColumn::make('lecturer')
                ->label('Lecturer'),
            TextColumn::make('room')
                ->label('Room'),
        ];
    }

    protected function getDefaultTableSortColumn(): string
    {
        return 'date'; // Sorting default berdasarkan kolom tanggal
    }

    protected function getDefaultTableSortDirection(): string
    {
        return 'asc'; // Urutan default secara ascending
    }

    public function getColumnSpan(): int
    {
        return 2;  // This makes it span the entire 12-column grid in the panel
    }
}
