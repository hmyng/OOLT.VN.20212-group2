<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user) // laravel 8 tu dong mapping nen k can tim user theo id nua
    {
        $blogs = Blog::where('author_id', $user->id)->get();
        return view('frontend.user', ['user' => $user, 'blogs' => $blogs]);
    }
    public function index()
    {
        $categories = Category::all();
        return view('frontend.user', compact('categories'));
    }
    public function post()
    {
        $categories = Category::all();
        return view('frontend.post-a-status', compact('categories'));
    }
}
