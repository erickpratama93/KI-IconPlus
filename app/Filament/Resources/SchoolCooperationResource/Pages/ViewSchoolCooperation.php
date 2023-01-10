<?php

namespace App\Filament\Resources\SchoolCooperationResource\Pages;

use App\Filament\Resources\SchoolCooperationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSchoolCooperation extends ViewRecord
{
    protected static string $resource = SchoolCooperationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
