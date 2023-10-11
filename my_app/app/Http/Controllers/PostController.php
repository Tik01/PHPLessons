<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index(){
    $posts = Post::all();
    return view('post.index',compact('posts'));
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
}
