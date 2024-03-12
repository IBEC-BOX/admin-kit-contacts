<?php

namespace AdminKit\Contacts\UI\API\DTO;

use Spatie\LaravelData\Data;
use AdminKit\Contacts\Models\Contact;

class ContactDTO extends Data
{
    public function __construct(
        public string $title,
        public string $phone,
        public string $mail,
        public string $address,
    )
    {
    }

    public static function fromModel(Contact $contact): ContactDTO
    {
        return new self(
            title: $contact->title,
            phone: $contact->phone,
            mail: $contact->mail,
            address: $contact->address,
        );
    }
}
