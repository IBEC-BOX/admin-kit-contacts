<?php

namespace AdminKit\Contacts\UI\Filament\Resources\ContactResource\Pages;

use AdminKit\Contacts\UI\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContact extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
