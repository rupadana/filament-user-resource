<?php

namespace Rupadana\FilamentUserResource\Filament\Resources\UserResource\Pages;

use Rupadana\FilamentUserResource\Filament\Resources\UserResource;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
