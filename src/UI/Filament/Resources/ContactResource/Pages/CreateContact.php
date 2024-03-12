<?php

namespace AdminKit\Contacts\UI\Filament\Resources\ContactResource\Pages;

use AdminKit\Contacts\UI\Filament\Resources\ContactResource;
use Filament\Resources\Pages\CreateRecord;

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
