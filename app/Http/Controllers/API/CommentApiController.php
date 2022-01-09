<?php

namespace App\Http\Controllers\API;

use App\Models\Comment;
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
        $comment = new Comment;
        $comment->blog_id = $request->blog_id;
        $comment->user_id = $this->user->id;
        $comment->comment_content = $request->comment_content;
        $comment->save();
        return $this->respondSuccess([
            'comment' => $comment
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
