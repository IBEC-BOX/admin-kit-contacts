<?php

namespace AdminKit\Contacts\UI\Filament\Resources;

use AdminKit\Contacts\Models\Contact;
use AdminKit\Contacts\UI\Filament\Resources\ContactResource\Pages;
use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TranslatableTabs::make(fn ($locale) => Forms\Components\Tabs\Tab::make($locale)->schema([
                    Forms\Components\TextInput::make('title.'.$locale)
                        ->label(__('admin-kit-contacts::contacts.resource.title'))
                        ->required($locale === app()->getLocale()),
                    Forms\Components\RichEditor::make('phone.'.$locale)
                        ->label(__('admin-kit-contacts::contacts.resource.phone'))
                        ->required(app()->getLocale() === $locale),
                    Forms\Components\RichEditor::make('mail.'.$locale)
                        ->label(__('admin-kit-contacts::contacts.resource.email'))
                        ->required(app()->getLocale() === $locale),
                    Forms\Components\RichEditor::make('address.'.$locale)
                        ->label(__('admin-kit-contacts::contacts.resource.address'))
                        ->required(app()->getLocale() === $locale),
                ])),
            ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin-kit-contacts::contacts.resource.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('admin-kit-contacts::contacts.resource.title')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-contacts::contacts.resource.created_at')),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContact::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-contacts::contacts.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-contacts::contacts.resource.plural_label');
    }
}
