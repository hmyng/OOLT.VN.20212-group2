<?php

namespace App\Http\Controllers\API;

use App\Models\User;

class UserApiController extends APIController
{
    public function __construct(

    )
    {
        parent::__construct();
    }

    public function follow(User $user)
    {
        $follow = Follow::where('parent_ID', $this->user->id)->where('follower_ID', $user->id)->get();
        if (!empty($follow)){
            $follow->delete();
            return $this->respondSuccessWithMessage('unfollow');
        } else {
            $follow = new Follow;
            $follow->parent_ID = $this->user->id;
            $follow->follower = $user->id;
            $follow->save();
            return $this->respondSuccessWithMessage('followed');
        }
    }
}
