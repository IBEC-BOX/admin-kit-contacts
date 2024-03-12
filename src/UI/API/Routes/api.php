<?php

use AdminKit\Contacts\UI\API\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class, 'index']);
