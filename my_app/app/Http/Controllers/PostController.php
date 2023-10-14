<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\University;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index(){
    $posts = Post::all();
   return view('post.index',compact('posts'));
}

public function create(){
    $universities = University::all();
    return view('post.create',compact('universities'));
}

public function store(){
    $data = request()->validate([
        'name'=>'string',
        'lastname'=>'string',
        'age'=>'string',
        'uname_id'=>'',
    ]);
Post::create($data);
return redirect()->route('post.index');
}

public function show(Post $post){
return view('post.show',compact('post'));
}

public function edit(Post $post){
    $universities = University::all();
    return view('post.edit', compact('post','universities'));
    }
    public function update(Post $post){
        $data = request()->validate([
            'name'=>'string',
            'lastname'=>'string',
            'age'=>'string',
            'uname_id'=>'',
        ]);
    $post->update($data);
        return redirect()->route('post.show',$post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
        }
}
