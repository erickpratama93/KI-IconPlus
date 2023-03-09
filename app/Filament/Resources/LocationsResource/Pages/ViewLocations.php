<?php

namespace App\Filament\Resources\LocationsResource\Pages;

use App\Filament\Resources\LocationsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLocations extends ViewRecord
{
    protected static string $resource = LocationsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
