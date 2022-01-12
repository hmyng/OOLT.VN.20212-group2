<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        dd($request->mySearch);
        //dd($request->get('mySearch'));
        $categories = Category::all();
        $search = Category::join('blogs', 'categories.id', '=', 'cat_id')
            ->where('cat_name', 'like', '%' . $request->get('search') . '%')
            ->get();
       // dd($categories->blogs);
        if(empty($categories[0])){
            return view('frontend.search-result-fail', compact('categories'));
        }
        return view('frontend.search-result', compact('search', 'categories'));
    }
}
