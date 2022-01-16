<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public function blogs(){
        $this->belongsTo(Blog::class, 'blog_id');
    }
    public function user(){
        $this->belongsTo(User::class, 'user_id');
    }
}
