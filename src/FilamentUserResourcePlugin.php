<?php

namespace Rupadana\FilamentUserResource;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Rupadana\FilamentUserResource\Filament\Resources\UserResource;

class FilamentUserResourcePlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'user';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                UserResource::class,
            ])
            ->pages([]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
