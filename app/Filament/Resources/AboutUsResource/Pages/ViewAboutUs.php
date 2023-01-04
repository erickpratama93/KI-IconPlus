<?php

namespace App\Filament\Resources\AboutUsResource\Pages;

use App\Filament\Resources\AboutUsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAboutUs extends ViewRecord
{
    protected static string $resource = AboutUsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
