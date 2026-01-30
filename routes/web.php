
<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', fn () => 'OK');

// TEMP: safe homepage so Cloud never 500s while we wire DB/pages
Route::get('/', fn () => 'LCR Home is up (wiring DB + pages next)');
