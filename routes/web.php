
<?php

use Illuminate\Support\Facades\Route;

/*
Kid version:
These are the website pages people can visit.
*/

// Health check (used to confirm the app is alive)
Route::get('/health', function () {
    return 'OK';
});

// Temporary home page test
Route::get('/', function () {
    return 'LCR is alive';
});
