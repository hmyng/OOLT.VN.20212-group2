<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categories';

    public function blogs(){
        return $this->hasMany(Blog::class, 'cat_id');
    }
}
