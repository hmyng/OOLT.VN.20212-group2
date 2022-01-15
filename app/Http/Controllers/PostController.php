<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Blog $blog){
        $categories = Category::all();
        $author = $blog->author;
        $blog->blog_seen_num = $blog->blog_seen_num + 1;
        $blog->save();
        //dd($blog);
        return view('frontend.new-post', compact('categories', 'blog', 'author'));
    }

    public function edit(Blog $blog){
        return view('frontend.edit_post', compact('blog'));
    }

    public function post(Blog $blog){
        $categories = Category::all();
        //dd($blog);
        return view('frontend.post_a_status', compact('categories', 'blog'));
    }
}
