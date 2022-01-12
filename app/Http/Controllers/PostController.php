<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Blog $blog){
        $categories = Category::all();
        //dd($blog);
        return view('frontend.new-post', compact('categories', 'blog'));
    }

    public function edit(Blog $blog){
        return view('frontend.edit_post', compact('blog'));
    }
}
