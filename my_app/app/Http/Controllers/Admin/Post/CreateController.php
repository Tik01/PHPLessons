<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\University;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $universities = University::all();
        $tags = Tag::all();
        $posts = Post::paginate(10);
        return view('admin.post.create',compact('universities','tags','posts'));
    }
}
