<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('app');
// });


// Route::get('about-us', function(){
//     return view('AboutUs');
// });

//Web
Route::get('/stories', [\App\Http\Controllers\StoryController::class, 'index']);

Route::get('/{any}', function () {
      return view('app');
  })->where('any',  '^(?!api).*$');


