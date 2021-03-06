<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct(Blog $trend)
    {
        $this->trend=$trend;
    }

    public function index(Blog $blog){
        $categories = Category::all();
        $author = $blog->author;
        $blog->blog_seen_num = $blog->blog_seen_num + 1;
        $blog->save();
        //dd($blog);
        $likes = $blog->liker;
        $comments = $blog->comment;
        $blog->category_name = $blog->category;
        $blog->checkLike = false;
        if (Auth::user()){
            $like = Like::where('blog_id', $blog->id)->where('liker_id', Auth::user()->id)->first();
            $follow = Follower::where('follower', $author->id)->where('parent_ID', Auth::user()->id)->first();
            $blog->checkLike = empty($like) ? false : true;
            $author->checkFollow = empty($follow) ? false : true;
        }
        foreach($comments as $comment){
            $comment->commenter = User::find($comment->user_id);
            //dd($comment->commenter);
        }
        //dd($comments);
        return view('frontend.new-post', compact('categories', 'blog', 'author', 'likes', 'comments'));
    }

    public function edit(Blog $blog){
        $categories = Category::all();
        return view('frontend.edit_post', compact('blog', 'categories'));
    }

    public function post(){
        $categories = Category::all();
        $author = User::get();

        // return view('frontend.post_a_status', compact('categories', 'blog'));
        return view('frontend.post_a_status', compact('categories', 'author'));
    }

    public function trend(){

        $categories = Category::all();
        $blogs = Blog::orderBy('blog_seen_num', 'desc')->paginate(10);
        foreach($blogs as $blog){
            $blog->author_name = $blog->author;
            $blog->count_like = count($blog->like);
            $blog->count_comment = count($blog->comment);
            $blog->category_name = $blog->category;
        }
        return view('frontend.trends', compact('blogs', 'categories'));
    }

    public function blog(Category $category){
        $categories = Category::all();
        $blogs = Blog::where('cat_id', $category->id)
                ->orderBy('blog_seen_num', 'desc')->paginate(10);
        foreach($blogs as $blog){
            $blog->author_name = $blog->author;
            $blog->count_like = count($blog->like);
            $blog->count_comment = count($blog->comment);
            $blog->category_name = $blog->category;
        }
        return view('frontend.blog-category', compact('blogs', 'categories', 'category'));

    }
}
