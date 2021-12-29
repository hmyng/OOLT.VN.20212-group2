<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $pageNumber = 15;
        // $blogs = Blog::paginate($pageNumber);
        // return view('frontend.home', ['blogs'=>$blogs]);
        return view('frontend.home');
    }
}
