<?php

declare(strict_types=1);

namespace AdminKit\Contacts\UI\API\Controllers;

use AdminKit\Contacts\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::all();
    }

    public function show(int $id)
    {
        return Contact::findOrFail($id);
    }
}
