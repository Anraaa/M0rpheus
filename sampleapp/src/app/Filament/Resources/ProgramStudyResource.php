<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramStudyResource\Pages;
use App\Filament\Resources\ProgramStudyResource\RelationManagers;
use App\Models\ProgramStudy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramStudyResource extends Resource
{
    protected static ?string $model = ProgramStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'Academic';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('study_program_code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('study_program_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('faculty_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('study_program_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('study_program_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('faculty_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProgramStudies::route('/'),
            'create' => Pages\CreateProgramStudy::route('/create'),
            'edit' => Pages\EditProgramStudy::route('/{record}/edit'),
        ];
    }
}
