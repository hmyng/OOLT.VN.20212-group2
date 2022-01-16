<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    use HasFactory;
    protected $table = 'blogs';

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function edit()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function delete()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
    public function like()
    {
        return $this->hasMany(Like::class, 'blog_id');
    }
    public function liker()
    {
        return $this->belongsToMany(User::class, 'likes','blog_id', 'liker_id');
    }
    public function comment()
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }
}
