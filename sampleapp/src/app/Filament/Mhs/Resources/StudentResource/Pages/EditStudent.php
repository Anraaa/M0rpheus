<?php

namespace App\Filament\Mhs\Resources\StudentResource\Pages;

use App\Filament\Mhs\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudent extends EditRecord
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function mount(string|int $record): void
    {
        // Mencari record mahasiswa berdasarkan ID
        $this->record = Mahasiswa::findOrFail($record);
        
        // Jika Anda ingin menambahkan logika pembatasan akses agar hanya mahasiswa yang bisa mengedit profilnya sendiri:
        if ($this->record->id !== auth()->user()->id) {
            abort(403, 'You do not have permission to edit this profile.');
        }
    }

}
