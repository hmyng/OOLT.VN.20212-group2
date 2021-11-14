<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::orderBy('id', 'DESC')->get();
        dd("dfhjahdsflja");
        return view('home', ["blog"=>$blog]);
    }
}
