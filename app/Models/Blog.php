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
}
