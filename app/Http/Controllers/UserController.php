<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use App\Models\Follower;
use App\Models\Like;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user) // laravel 8 tu dong mapping nen k can tim user theo id nua
    {
        $categories = Category::all();
        $blogs = Blog::where('author_id', $user->id)->orderBy('created_at', 'desc')->get();
        foreach($blogs as $blog){
            $blog->count_like = count($blog->like);
            $blog->count_comment = count($blog->comment);
        }
        $followers = Follower::where('parent_id', $user->id)->get();
        $sumOfLikes = Like::join('blogs','blogs.id', '=', 'blog_id')
            ->where('author_id',$user->id)->get();
                
        return view('frontend.user', compact('user', 'categories', 'blogs', 'followers', 'sumOfLikes'));
    }

    public function post()
    {
        $categories = Category::all();
        return view('frontend.post-a-status', compact('categories'));
    }
}
