<?php

namespace App\Filament\Resources\GuestTeacherResource\Pages;

use App\Filament\Resources\GuestTeacherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGuestTeachers extends ListRecords
{
    protected static string $resource = GuestTeacherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
