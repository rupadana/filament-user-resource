<?php

namespace Rupadana\FilamentUserResource\Filament\Resources\UserResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Rupadana\FilamentUserResource\Filament\Resources\UserResource;

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
