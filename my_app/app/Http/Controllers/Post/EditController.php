<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\University;


class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $universities = University::all();
        $tags = Tag::all();
        return view('post.edit', compact('post','universities','tags'));
    }
}
