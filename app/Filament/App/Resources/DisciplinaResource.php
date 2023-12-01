<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\DisciplinaResource\Pages;
use App\Filament\App\Resources\DisciplinaResource\RelationManagers;
use App\Models\Disciplina;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use App\Models\Team; 
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class DisciplinaResource extends Resource
{
    protected static ?string $model = Disciplina::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        // Obtém o usuário autenticado
        $user = Auth::user();

        // Obtém o time atual do usuário, ou null se não houver
        $currentTeam = $user ? $user->teams->first() : null;

        // Pré-carregamento dos cursos associados ao time do usuário, ou um array vazio se não houver time
        $cursos = $currentTeam
            ? $currentTeam->cursos->pluck('nome', 'id')->toArray()
            : [];

        return $form
            ->schema([
                TextInput::make('nome')->live(onBlur: true),
                Forms\Components\Select::make('curso_id')
                    ->options($cursos)
                    ->required(),
            ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListDisciplinas::route('/'),
            'create' => Pages\CreateDisciplina::route('/create'),
            'edit' => Pages\EditDisciplina::route('/{record}/edit'),
        ];
    }    
}
