<?php
use Illuminate\Support\Facades\Route;

Route::get('/stories-list', [\App\Http\Controllers\StoryController::class, 'storyList'])->name('story.list');
?>