<?php

namespace App\Filament\App\Resources\AnosResource\Pages;

use App\Filament\App\Resources\AnosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnos extends ListRecords
{
    protected static string $resource = AnosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
