<?php

namespace App\Filament\App\Resources\AnosResource\Pages;

use App\Filament\App\Resources\AnosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnos extends EditRecord
{
    protected static string $resource = AnosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
