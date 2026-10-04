<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stories', [\App\Http\Controllers\StoryController::class, 'index']);
