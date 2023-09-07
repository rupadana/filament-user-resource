<?php

namespace Rupadana\FilamentUserResource\Filament\Resources\UserResource\Pages;

use Rupadana\FilamentUserResource\Filament\Resources\UserResource;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getShieldRedirectPath(): string {
        return '/';
    }
}
