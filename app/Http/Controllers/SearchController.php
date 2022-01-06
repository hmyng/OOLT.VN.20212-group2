<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function store(Request $request)
    {
        if ($request->search) {
            $categories = Category::where('cat_name', 'like', '%' . $request->get('search') . '%')
                ->paginate(4);
        } else {
            $categories = Category::paginate(4);
        }
        return view('front-end.contents.productList', ['categories' => $categories]);
    }
}
