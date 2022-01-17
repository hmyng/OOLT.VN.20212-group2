<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    protected $table = 'followers';
    public function parent(){
        $this->belongsTo(User::class, 'parent_ID');
    }
    public function follower(){
        $this->belongsTo(User::class, 'follower');
    }
}
