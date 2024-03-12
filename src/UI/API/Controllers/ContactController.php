<?php

declare(strict_types=1);

namespace AdminKit\Contacts\UI\API\Controllers;

use AdminKit\Contacts\Models\Contact;
use AdminKit\Contacts\UI\API\DTO\ContactDTO;
use Spatie\LaravelData\DataCollection;

class ContactController extends Controller
{
    public function index(): DataCollection
    {
        $contacts = Contact::query()
            ->get();

        return ContactDTO::collection($contacts);
    }
}
