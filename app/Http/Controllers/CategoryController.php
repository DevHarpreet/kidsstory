<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return \App\Models\Category::get();
    }

    public function store( Request $request){

        $validate = $request->validate([
            'title' => 'required|string|max:255|unique:categories,title',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'summary' => 'required|string',
            'description' => 'required|string',
            'placeholder_image' => 'required|string',
            'banner_image' => 'required|string',
        ]);

        try {
            $category = Category::create($validate);

            return response()->json([
                'msg' => 'Successfully created',
                'status' => 'success'
            ], 201);
        }
        catch( \Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'msg' => 'Try again!',
                'status' => 'error'
            ], 500);
        }

    }
}
