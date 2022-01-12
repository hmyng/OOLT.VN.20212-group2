<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $pageNumber = 15;
        // $blogs = Blog::paginate($pageNumber);
        $categories = Category::all();
        foreach ($categories as $category){
            $category->list_blog = $category->blogs;
        }

        //dd($categories[0]->cat_name);
        // return view('frontend.home', ['blogs'=>$blogs]);
        return view('frontend.home', compact('categories'));
    }
}
