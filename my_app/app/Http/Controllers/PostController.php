<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\University;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index(){
    $university = University::find(1);
    $post = Post::find(1);
    // $posts = Post::Where('uname_id',$university->id)->get();
   
    dd($post->university);
}

public function create(){
    return view('post.create');
}
public function store(){
    $data = request()->validate([
        'name'=>'string',
        'lastname'=>'string',
        'age'=>'string'
    ]);
Post::create($data);
return redirect()->route('post.index');
}

public function show(Post $post){
return view('post.show',compact('post'));
}

public function edit(Post $post){
    return view('post.edit', compact('post'));
    }
    public function update(Post $post){
        $data = request()->validate([
            'name'=>'string',
            'lastname'=>'',
            'age'=>'string'
        ]);
    $post->update($data);
        return redirect()->route('post.show',$post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
        }
}
