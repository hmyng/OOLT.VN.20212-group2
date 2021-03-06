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
        $blog->description = $request->description;
        $blog->author_id = $this->user->id;
        $blog->blog_seen_num = 0;
        $blog->save();
        return $this->respondSuccess([
            'blog' => $blog
        ]);

    }

    public function update(Blog $blog, Request $request)
    {
        $blog = Blog::find($blog->id);
        $blog->blog_heading = $request->blog_heading;
        $blog->blog_display = $request->blog_display;
        $blog->blog_content = $request->blog_content;
        $blog->description = $request->description;
        $blog->cat_id = $request->cat_id;
        $blog->save();
        return $this->respondSuccess([
            'blog' => $blog
        ]);
    }

    public function destroy(Blog $blog, Request $request)
    {
        $blog = Blog::find($blog->id);

        $blog->delete();

        return $this->respondSuccessWithMessage("Delete successfully!");
    }

    public function likeBlog(Blog $blog)
    {
        $like = Like::where('blog_id', $blog->id)->where('liker_id', $this->user->id)->first();
        if (!empty($like)) {
            $like->delete();
        } else {
            $like = new Like;
            $like->liker_id = $this->user->id;
            $like->blog_id = $blog->id;
            $like->save();
        }
        return $this->respondSuccess(['count' => count($blog->like)]);
    }
}
