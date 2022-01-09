<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user) // laravel 8 tu dong mapping nen k can tim user theo id nua
    {
        return view('profile', ['user' => $user]);
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
