<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuestTeacherResource\Pages;
use App\Filament\Resources\GuestTeacherResource\RelationManagers;
use App\Models\GuestTeacher;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuestTeacherResource extends Resource
{
    protected static ?string $model = GuestTeacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Landing Page';
    protected static ?string $recordTitleAttribute = 'title';
    public static function form(Form $form): Form
    { 
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255), 
                Forms\Components\Textarea::make('description')
                ->required()
                
            ]);
    }

    public static function table(Table $table): Table
    { 
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListGuestTeachers::route('/'),
            'create' => Pages\CreateGuestTeacher::route('/create'),
            'view' => Pages\ViewGuestTeacher::route('/{record}'),
            'edit' => Pages\EditGuestTeacher::route('/{record}/edit'),
        ];
    }    
}
