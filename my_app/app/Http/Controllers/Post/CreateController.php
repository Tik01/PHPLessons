<?php

namespace App\Http\Controllers\Post;

use App\Models\Tag;
use App\Models\University;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $universities = University::all();
        $tags = Tag::all();
    
        return view('post.create',compact('universities','tags'));
    }
}
