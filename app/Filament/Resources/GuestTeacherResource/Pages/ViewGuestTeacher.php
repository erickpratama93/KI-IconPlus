<?php

namespace App\Filament\Resources\GuestTeacherResource\Pages;

use App\Filament\Resources\GuestTeacherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGuestTeacher extends ViewRecord
{
    protected static string $resource = GuestTeacherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
