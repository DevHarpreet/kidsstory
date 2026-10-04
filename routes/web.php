<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/stories', [\App\Http\Controllers\StoryController::class, 'index']);
