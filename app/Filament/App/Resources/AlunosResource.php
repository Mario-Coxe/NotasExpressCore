<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\AlunosResource\Pages;
use App\Filament\App\Resources\AlunosResource\RelationManagers;
use App\Models\Aluno;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class AlunosResource extends Resource
{
    protected static ?string $model = Aluno::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
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
                        ->offColor('danger')
                        
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
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlunos::route('/'),
            'create' => Pages\CreateAlunos::route('/create'),
            'edit' => Pages\EditAlunos::route('/{record}/edit'),
        ];
    }    
}