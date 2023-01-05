<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchoolCooperationResource\Pages;
use App\Filament\Resources\SchoolCooperationResource\RelationManagers;
use App\Models\SchoolCooperation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class SchoolCooperationResource extends Resource
{
    protected static ?string $model = SchoolCooperation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('npsn')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('school_name')
                ->required()
                ->maxLength(255),
                Forms\Components\Textarea::make('school_address')
                ->minLength(50)
                ->maxLength(5000),
                Select::make('accreditation')
                 ->options([ 
                     'a' => 'A',
                    'b' => 'B',
                    'c' => 'C',
                    'd' => 'D',
                 ]),
                 Forms\Components\TextInput::make('headmaster_name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('website')
                ->required()
                ->maxLength(500), 
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('npsn'),
                Tables\Columns\TextColumn::make('school_name'),
                Tables\Columns\TextColumn::make('school_address'),
                Tables\Columns\TextColumn::make('accreditation'),
                Tables\Columns\TextColumn::make('headmaster_name'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('website'),
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
            'index' => Pages\ListSchoolCooperations::route('/'),
            'create' => Pages\CreateSchoolCooperation::route('/create'),
            'view' => Pages\ViewSchoolCooperation::route('/{record}'),
            'edit' => Pages\EditSchoolCooperation::route('/{record}/edit'),
        ];
    }    
}
