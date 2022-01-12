<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::
            // ->join('users', 'users.id', '=', 'author_id')
            where('cat_name', 'like', '%' . $request->get('search') . '%')
            ->first();
       // dd($categories->blogs);
        if(empty($categories[0])){
            return view('frontend.search-result-fail');
        }
        return view('frontend.search-result', compact('categories'));
    }
}
