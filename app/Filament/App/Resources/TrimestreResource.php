<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\TrimestreResource\Pages;
use App\Filament\App\Resources\TrimestreResource\RelationManagers;
use App\Models\Trimestre;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;


class TrimestreResource extends Resource
{
    protected static ?string $model = Trimestre::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('trimestre')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('trimestre')->searchable(),
                TextColumn::make('created_at')

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
            'index' => Pages\ListTrimestres::route('/'),
            'create' => Pages\CreateTrimestre::route('/create'),
            'edit' => Pages\EditTrimestre::route('/{record}/edit'),
        ];
    }    
}
