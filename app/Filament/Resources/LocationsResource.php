<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocationsResource\Pages;
use App\Filament\Resources\LocationsResource\RelationManagers;
use App\Models\Locations;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LocationsResource extends Resource
{
    protected static ?string $model = Locations::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationGroup = 'Homepage';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kabupaten')
                ->required()
                ,
                Forms\Components\TextInput::make('kecamatan')
                ->required()
                ,
                Forms\Components\TextInput::make('Latitude')
                ->required()
                ,
                Forms\Components\TextInput::make('Longitude')
                ->required()
                ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table 
            ->columns([
                Tables\Columns\TextColumn::make('kabupaten'),
                Tables\Columns\TextColumn::make('kecamatan'),
                Tables\Columns\TextColumn::make('Latitude'),
                Tables\Columns\TextColumn::make('Longitude'),
                Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
        ])
            
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLocations::route('/'),
            'create' => Pages\CreateLocations::route('/create'),
            'view' => Pages\ViewLocations::route('/{record}'),
            'edit' => Pages\EditLocations::route('/{record}/edit'),
        ];
    }    
}
