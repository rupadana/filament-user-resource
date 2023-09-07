<?php

namespace Rupadana\FilamentUserResource\Filament\Resources\UserResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Rupadana\FilamentUserResource\Filament\Resources\UserResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getShieldRedirectPath(): string
    {
        return '/';
    }
}
