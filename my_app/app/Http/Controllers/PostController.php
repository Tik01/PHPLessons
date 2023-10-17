<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\University;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index(){
    $post = Post::Find(2);
    // $university = University::find(1);
    $tag = Tag::find(1);

    dd($post->tags);
   return view('post.index',compact('posts'));
}

public function create(){
    $universities = University::all();
    $tags = Tag::all();

    return view('post.create',compact('universities','tags'));
}

public function store(){
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

public function show(Post $post){
return view('post.show',compact('post'));
}

public function edit(Post $post){
    $universities = University::all();
    $tags = Tag::all();
    return view('post.edit', compact('post','universities','tags'));
    }

    public function update(Post $post){
        $data = request()->validate([
            'name'=>'string',
            'lastname'=>'string',
            'age'=>'string',
            'uname_id'=>'',
            'tags'=>'',

        ]);
        $tags = $data['tags'];
        unset($data['tags']);

       $post->update($data);
       $post->tags()->sync($tags);
        return redirect()->route('post.show',$post->id);
    }


    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
        }
}
