<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'name'=>'required|string',
            'lastname'=>'string',
            'age'=>'string',
            'uname_id'=>'',
            'tags'=>'',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
    
      $post = Post::create($data);
      
      $post->tags()->attach($tags);
    
    return redirect()->route('post.index');
    }
}
