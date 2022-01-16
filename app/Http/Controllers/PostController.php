<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Blog $blog){
        $categories = Category::all();
        $author = $blog->author;
        $blog->blog_seen_num = $blog->blog_seen_num + 1;
        $blog->save();
        //dd($blog);
        $likes = $blog->liker;
        $comments = $blog->comment;
        foreach($comments as $comment){
            $comment->commenter = User::find($comment->user_id);
            //dd($comment->commenter);
        }
        //dd($comments);
        return view('frontend.new-post', compact('categories', 'blog', 'author', 'likes', 'comments'));
    }

    public function edit(Blog $blog){
        return view('frontend.edit_post', compact('blog'));
    }

    public function post(Blog $blog){
        $categories = Category::all();
        //dd($blog);
        return view('frontend.post_a_status', compact('categories', 'blog'));
    }

    public function trend(){
        $blogs = Blog::orderBy('blog_seen_num')->take(20)->get();
        return view('frontend.trends', compact('blogs'));
    }
}
