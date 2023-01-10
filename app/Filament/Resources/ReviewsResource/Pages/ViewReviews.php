<?php

namespace App\Filament\Resources\ReviewsResource\Pages;

use App\Filament\Resources\ReviewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewReviews extends ViewRecord
{
    protected static string $resource = ReviewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
