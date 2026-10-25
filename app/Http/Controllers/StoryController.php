<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

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

    public function store( Request $request){

        $validate = $request->validate([
            'title' => 'required|string|max:255|unique:stories,title',
            'slug' => 'required|string|max:255|unique:stories,slug',
            'summary' => 'required|string',
            'description' => 'required|string',
            'placeholder_image' => 'required|string',
            'banner_image' => 'required|string',
            'json_dataset' => 'nullable|string'
        ]);

        try {
            $validate['json_dataset'] = $validate['json_dataset'] ?? '[]';
            $story = Story::create($validate);

            return response()->json([
                'msg' => 'Successfully created',
                'status' => 'success'
            ], 201);

        }
        catch( \Exception $e) {
             \Log::error($e->getMessage());
             return response()->json([
                'msg' => 'Try again!',
                'status' => 'error'
            ], 500);
        }
    }
}
