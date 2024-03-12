<?php

namespace AdminKit\Contacts\UI\Filament\Resources\ContactResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use AdminKit\Contacts\UI\Filament\Resources\ContactResource;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return ContactResource::getUrl();
    }
}
