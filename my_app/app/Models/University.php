<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function posts(){
        return $this->hasMany(Post::class,'uname_id');
    }
}
