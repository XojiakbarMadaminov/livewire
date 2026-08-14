<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello';
})->name('home');


Route::get('ai', function () {
    $response = \App\Ai\Agents\SalesCoach::make(prompt: 'salom');

    return response($response);
});
