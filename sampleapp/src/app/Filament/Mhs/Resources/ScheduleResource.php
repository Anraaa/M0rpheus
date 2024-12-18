<?php

namespace App\Filament\Mhs\Resources;

use App\Filament\Mhs\Resources\ScheduleResource\Pages;
use App\Models\Schedule;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('day')->label('Day'),
                Tables\Columns\TextColumn::make('date')->label('Date'),
                Tables\Columns\TextColumn::make('start_time')->label('Start Time'),
                Tables\Columns\TextColumn::make('end_time')->label('End Time'),
                Tables\Columns\TextColumn::make('duration_time')->label('Duration'),
                Tables\Columns\TextColumn::make('course_name')->label('Course Name'),
                Tables\Columns\TextColumn::make('meeting_number')->label('Meeting Number'),
                Tables\Columns\TextColumn::make('lecturer')->label('Lecturer'),
                Tables\Columns\TextColumn::make('room')->label('Room'),
            ])
            ->filters([
                // Jika ingin menambahkan filter, tambahkan di sini.
            ])
            ->actions([]) // Tidak ada aksi untuk edit atau view
            ->bulkActions([]); // Tidak ada aksi untuk bulk delete atau lainnya
    }

    public static function getRelations(): array
    {
        return [
            // Jika ada relasi, tambahkan di sini.
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchedules::route('/'), // Hanya halaman index untuk melihat data
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
