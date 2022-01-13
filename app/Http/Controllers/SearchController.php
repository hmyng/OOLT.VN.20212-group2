<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->mySearch);
        //dd($request->get('mySearch'));
        $mySearch = $request->get('mySearch');
        $categories = Category::all();
        $search = Category::join('blogs', 'categories.id', '=', 'cat_id')
            ->join('users', 'users.id', '=', 'author_id')
            ->where('cat_name', 'like', '%' . $request->get('mySearch') . '%')
            ->orWhere('blog_heading', 'like', '%' . $request->get('mySearch') . '%')
            ->get();
       // dd($categories->blogs);
        if(empty($search[0])){
            return view('frontend.search-result-fail', compact('categories', 'mySearch'));
        }
        return view('frontend.search-result', compact('search', 'categories', 'mySearch'));
    }
}
