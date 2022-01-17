<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $categories = Category::get();
        $cat = Category::where('cat_name', 'like', '%' . $request->get('mySearch') . '%')->get();
        $search = Blog::
             whereIn('cat_id', $cat->pluck('id'))
            ->orWhere('blog_heading', 'like', '%' . $request->get('mySearch') . '%')
            ->get();

        foreach($search as $searchResult){
            $searchResult->user = $searchResult->author;
        }
       // dd($categories->blogs);
        if(empty($search[0])){
            return view('frontend.search-result-fail', compact('categories', 'mySearch'));
        }
        return view('frontend.search-result', compact('search', 'categories', 'mySearch'));
    }
}
