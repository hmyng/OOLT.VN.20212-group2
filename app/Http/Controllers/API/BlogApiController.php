<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Blog;
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
        $blog->blog_display = "dfasdfas";
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
}
