<?php

namespace Rupadana\FilamentUserResource\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rupadana\FilamentUserResource\Filament\FilamentUserResource
 */
class FilamentUserResource extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rupadana\FilamentUserResource\Filament\FilamentUserResource::class;
    }
}
