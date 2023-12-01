<?php

namespace App\Filament\App\Resources\CursosResource\Pages;

use App\Filament\App\Resources\CursosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCursos extends CreateRecord
{
    protected static string $resource = CursosResource::class;

    public function handle()
{
    parent::handle();

    // Redireciona para a lista de cursos após a criação
    return redirect(route('filament.app.cursos.index'));
}
}

