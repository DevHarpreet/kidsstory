<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index(){
        return \App\Models\Story::with('chapters', 'categories', 'ageGroups')->get();
    }

    public function storyList(){
        return \App\Models\Story::with('ageGroups', 'categories')->get();
    }

    public function getStory($slug){
        return \App\Models\Story::with('chapters')->where('slug', $slug)->firstOrFail();
    }
}
