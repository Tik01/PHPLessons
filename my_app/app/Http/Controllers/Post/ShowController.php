<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;


class ShowController extends BaseController
{
    public function __invoke(Post $posts)
    {
        return view('admin.post.show',compact('posts'));
    }
}
