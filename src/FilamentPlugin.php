<?php

namespace AdminKit\Contacts;

use Filament\Contracts\Plugin;
use Filament\Panel;
use AdminKit\Contacts\UI\Filament\Resources\ContactResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-contacts';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            ContactResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
