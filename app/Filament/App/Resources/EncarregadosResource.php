<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\EncarregadosResource\Pages;
use App\Filament\App\Resources\EncarregadosResource\RelationManagers;
use App\Models\Encarregado;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Facades\Auth;


class EncarregadosResource extends Resource
{
    protected static ?string $model = Encarregado::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {


        
        // Obtém o usuário autenticado
        $user = Auth::user();

        // Obtém o time atual do usuário, ou null se não houver
        $currentTeam = $user ? $user->teams->first() : null;

        // Pré-carregamento dos cursos associados ao time do usuário, ou um array vazio se não houver time
        $alunos = $currentTeam
            ? $currentTeam->alunos->pluck('nome', 'id')->toArray()
            : [];

      


        return $form
            ->schema([
                //
                TextInput::make('nome'),
                TextInput::make('password')
                ->placeholder('Senha'),
                TextInput::make('telefone')
                ->tel()
                ->placeholder('Número de Telefone')
                ->length(9),
                TextInput::make('bi')
                ->placeholder('Número deo BI'),
                Toggle::make('status')
                ->onColor('success')
                ->offColor('danger'),
                Forms\Components\Select::make('aluno_id')
                ->options($alunos)
                ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                TextColumn::make('nome')->searchable(),
                TextColumn::make('password')->searchable(),
                TextColumn::make('telefone')->searchable(),
                TextColumn::make('bi')->searchable(),
                IconColumn::make('status')->boolean(),
                TextColumn::make('aluno.nome')
                ->label('Aluno')
                ->searchable(),
                TextColumn::make('created_at')


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
    
    /*
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEncarregados::route('/'),
            'create' => Pages\CreateEncarregados::route('/create'),
            'edit' => Pages\EditEncarregados::route('/{record}/edit'),
        ];
    }    
    */
}
