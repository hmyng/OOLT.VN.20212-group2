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

    public function post(){
        $categories = Category::all();
        // return view('frontend.post_a_status', compact('categories', 'blog'));
        return view('frontend.post_a_status', compact('categories'));
    }

    public function trend(){
        $categories = Category::all();
        $blogs = Blog::orderBy('blog_seen_num', 'desc')->take(20)->get();
        foreach($blogs as $blog){
            $author = $blog->author;
            $likes = $blog->liker;
            $comments = $blog->comment;
            $category = $blog->category;
            foreach($comments as $comment){
                $comment->commenter = User::find($comment->user_id);
            }
        }
        return view('frontend.trends', compact('blogs', 'categories', 'author', 'blog','likes', 'comments', 'category'));
    }

    public function blog(){
        $categories = Category::all();
        $blogs = Blog::orderBy('blog_seen_num', 'desc')->take(20)->get();
        foreach($blogs as $blog){
            $blog->author_name = $blog->author;
            $blog->likes = $blog->like;
            $blog->comments = $blog->comment;
            $blog->category_name = $blog->category;
            foreach($blog->comments as $comment){
                $comment->commenter = User::find($comment->user_id);
            }
        }
        return view('frontend.blog-category', compact('blogs', 'categories'));
    }
}
