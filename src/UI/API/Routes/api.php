<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Contacts\UI\API\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index']);
