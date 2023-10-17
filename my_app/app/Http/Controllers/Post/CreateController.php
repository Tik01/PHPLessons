<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\University;

class CreateController extends Controller
{
    public function __invoke()
    {
        $universities = University::all();
        $tags = Tag::all();
    
        return view('post.create',compact('universities','tags'));
    }
}
