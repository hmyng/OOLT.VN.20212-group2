<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
    public function blogs(){
        $this->belongsTo(Blog::class, 'blog_id');
    }
    public function users(){
        $this->belongsTo(User::class, 'liker_id');
    }
}
