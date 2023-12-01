<?php

namespace App\Filament\App\Resources\DisciplinaResource\Pages;

use App\Filament\App\Resources\DisciplinaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisciplina extends EditRecord
{
    protected static string $resource = DisciplinaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
