<?php

namespace App\Filament\App\Resources\TrimestreResource\Pages;

use App\Filament\App\Resources\TrimestreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrimestre extends EditRecord
{
    protected static string $resource = TrimestreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
