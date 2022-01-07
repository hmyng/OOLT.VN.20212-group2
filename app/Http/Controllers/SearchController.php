<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::join('blogs', 'categories.id', '=', 'cat_id')
            ->join('users', 'users.id', '=', 'author_id')
            ->where('cat_name', 'like', '%' . $request->get('search') . '%')
            ->select('*')->paginate(12);
        
        // if($categories == NULL){
        //     return view('frontend.search-result-fail', compact('categories'));
        // }

        return view('frontend.search-result', compact('categories'));
    }
}
