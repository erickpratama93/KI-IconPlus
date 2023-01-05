<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewsResource\Pages;
use App\Filament\Resources\ReviewsResource\RelationManagers;
use App\Models\Reviews;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewsResource extends Resource
{
    protected static ?string $model = Reviews::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('reviews_name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('reviews_school')
                ->required()
                ->maxLength(255),
                Forms\Components\FileUpload::make('reviews_image')
                ->minSize(50)
                ->maxSize(1024),
                Forms\Components\Textarea::make('reviews_message')
                ->required()
                ->minLength(5)
                    ->maxLength(5000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reviews_name'),
                Tables\Columns\TextColumn::make('reviews_school'),
                Tables\Columns\TextColumn::make('reviews_image'),
                Tables\Columns\TextColumn::make('reviews_message'),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReviews::route('/create'),
            'view' => Pages\ViewReviews::route('/{record}'),
            'edit' => Pages\EditReviews::route('/{record}/edit'),
        ];
    }    
}
