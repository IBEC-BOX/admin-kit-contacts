<?php

namespace AdminKit\Contacts\UI\Filament\Resources\ContactResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Contacts\UI\Filament\Resources\ContactResource;

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
