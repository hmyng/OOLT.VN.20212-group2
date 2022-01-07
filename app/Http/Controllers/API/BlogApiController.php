<?php

namespace App\Http\Controllers\API;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogApiController extends APIController
{
    public function __construct(

    )
    {
        parent::__construct();
    }

    public function store(Request $request)
    {
        $blog = new Blog;

        $blog->blog_heading = $request->blog_heading;
        $blog->blog_content = $request->blog_content;
        $blog->cat_id = $request->cat_id;
        $blog->blog_display = $request->blog_display;
        $blog->save();
        return $this->respondSuccess([
            'blog' => $blog
        ]);
    }

    public function update(Blog $blog, Request $request)
    {
        $blog = Blog::find($blog->id);

        $blog->blog_heading = $request->blog_heading;
        $blog->blog_content = $request->blog_content;

        $blog->save();
        return $this->respondSuccess([
            'blog' => $blog
        ]);
    }

    public function destroy(Blog $blog, Request $request)
    {
        $blog = Blog::find($blog->id);

        $blog->delete();

        $this->respondSuccessWithMessage("Delete successfully!");
    }

    public function likeBlog(Blog $blog, Request $request)
    {
        $like = Like::where('blog_id', $blog->id)->where('liker_id', $request->liker_id)->first();
        if (empty($like)){
            $like = new Like;
            $like->liker_id = Auth::user()->id;
            $like->blog_id = $blog->id;
            $this->respondSuccessWithMessage("Like");
        } else {
            $like->delete();
            $this->respondSuccessWithMessage("Unlike");
        }

    }
}
