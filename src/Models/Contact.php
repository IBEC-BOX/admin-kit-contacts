<?php

namespace AdminKit\Contacts\Models;

use AdminKit\Contacts\Database\Factories\ContactFactory;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Contact extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_contacts';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): ContactFactory
    {
        return new ContactFactory();
    }
}
