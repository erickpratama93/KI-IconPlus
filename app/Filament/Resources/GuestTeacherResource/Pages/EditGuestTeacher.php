<?php

namespace App\Filament\Resources\GuestTeacherResource\Pages;

use App\Filament\Resources\GuestTeacherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuestTeacher extends EditRecord
{
    protected static string $resource = GuestTeacherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
