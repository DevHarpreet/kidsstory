<?php
use Illuminate\Support\Facades\Route;

Route::get('/stories-list', [\App\Http\Controllers\StoryController::class, 'storyList'])->name('story.list');

Route::get('/category-list', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.list');
?>