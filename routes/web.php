<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return 'OK';
});

Route::get('/', function () {
    return 'LCR is alive';
});<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
