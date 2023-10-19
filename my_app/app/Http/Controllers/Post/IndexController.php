<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use App\Models\Tag;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $query = Post::query();
        if(isset($data['uname_id'])){
            $query->where('uname_id',$data['uname_id']);
        }
        $posts = $query->get();
        dd($posts);
    //     $posts = Post::paginate(10);
    //    return view('post.index',compact('posts'));
    }
}
