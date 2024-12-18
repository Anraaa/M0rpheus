<?php

namespace App\Filament\Mhs\Resources;

use App\Filament\Mhs\Resources\StudentResource\Pages;
use App\Filament\Mhs\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Field NIM
                Forms\Components\TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->unique()
                    ->maxLength(20),

                // Field Name
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),

                // Field Tanggal Lahir
                Forms\Components\DatePicker::make('dob')
                    ->label('Tanggal Lahir')
                    ->required(),

                // Field Program Studi
                Forms\Components\Select::make('program_study_id')
                    ->label('Program Studi')
                    ->required()
                    ->options(
                        ProgramStudy::all()->pluck('name', 'id') // Menampilkan daftar Program Studi
                    ),

                // Field Fakultas
                Forms\Components\TextInput::make('faculty')
                    ->label('Fakultas')
                    ->required()
                    ->maxLength(255),

                // Field Tahun Masuk
                Forms\Components\TextInput::make('admission_year')
                    ->label('Tahun Masuk')
                    ->required()
                    ->numeric()
                    ->maxLength(4),
            ]);
    }


    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nim')
                    ->label('NIM'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('program_study.name')
                    ->label('Program Studi'),
                Tables\Columns\TextColumn::make('faculty')
                    ->label('Fakultas'),
                Tables\Columns\TextColumn::make('admission_year')
                    ->label('Tahun Masuk'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            //'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
