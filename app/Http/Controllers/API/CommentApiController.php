<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class CommentApiController extends APIController
{
    public function __construct(

    )
    {
        parent::__construct();
    }

    public function store(Request $request)
    {
        $blog = new Comment;

        $blog->blog_heading = $request->blog_heading;
        $blog->blog_content = $request->blog_content;
        $blog->cat_id = $request->cat_id;
        $blog->blog_display = $request->blog_display;
        $blog->save();
        return $this->respondSuccess([
            'blog' => $blog
        ]);
    }

    public function update(Comment $comment, Request $request)
    {
        $comment->blog_id = $request->blog_id;
        $comment->user_id = $request->user_id;
        $comment->comment_content = $request->comment_content;

        $comment->save();
        return $this->respondSuccess([
            'comment' => $comment
        ]);
    }

    public function destroy(Comment $comment, Request $request)
    {
        $comment->delete();

        $this->respondSuccessWithMessage("Delete successfully!");
    }
}
