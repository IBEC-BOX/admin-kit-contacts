<?php

namespace AdminKit\Contacts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Contacts\Contacts
 */
class Contacts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Contacts\Contacts::class;
    }
}
