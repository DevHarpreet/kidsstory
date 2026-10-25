<?php
use Illuminate\Support\Facades\Route;

Route::get('/stories-list', [\App\Http\Controllers\StoryController::class, 'storyList'])->name('story.list');

Route::get('/category-list', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.list');

Route::get('story-detail/{slug}', [\App\Http\Controllers\StoryController::class, 'getStory'])->name('story.detail');


//Admin URLS
Route::post('/admin/stories/store', [\App\Http\Controllers\StoryController::class, 'store'])->name('story.store');
Route::post('/admin/categories/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('store.category');
?>