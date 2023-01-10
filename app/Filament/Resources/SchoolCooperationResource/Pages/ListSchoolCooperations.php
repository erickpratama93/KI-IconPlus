<?php

namespace App\Filament\Resources\SchoolCooperationResource\Pages;

use App\Filament\Resources\SchoolCooperationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchoolCooperations extends ListRecords
{
    protected static string $resource = SchoolCooperationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
