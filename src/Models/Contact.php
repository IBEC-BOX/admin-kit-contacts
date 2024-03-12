<?php

namespace AdminKit\Contacts\Models;

use AdminKit\Contacts\Database\Factories\ContactFactory;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

/**
 * @property-read string $title
 * @property-read string $phone
 * @property-read string $mail
 * @property-read string $address
 * @property-read ?integer $sort
 */
class Contact extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_contacts';

    protected $fillable = [
        'title',
        'phone',
        'mail',
        'address',
    ];

    protected array $translatable = [
        'title',
        'phone',
        'mail',
        'address',
    ];

    protected static function newFactory(): ContactFactory
    {
        return new ContactFactory();
    }
}
