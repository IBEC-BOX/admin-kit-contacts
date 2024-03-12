<?php

namespace AdminKit\Contacts\Commands;

use Illuminate\Console\Command;

class ContactsCommand extends Command
{
    public $signature = 'admin-kit-contacts';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
