<?php

namespace Rupadana\FilamentUserResource\Filament\Resources\UserResource\Pages;

use Rupadana\FilamentUserResource\Filament\Resources\UserResource;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getShieldRedirectPath(): string
    {
        return '/'; // redirect to the root index...
    }
}
