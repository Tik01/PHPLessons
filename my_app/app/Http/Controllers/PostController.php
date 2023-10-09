<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(){
    $posts = Post::all();

    return view('post',compact(var_name:'posts'));
}

    public function AddPerson(){
        $mens = [[
            'name' => "AAAAA",
            'lastname'=>'AAAAA',
            'age'=>21,
        ],
        [
            'name' => "BBBBB",
            'lastname'=>'BBBBB',
            'age'=>21,  
        ],
        [
            'name' => "CCCCC",
            'lastname'=>'CCCCC',
            'age'=>21,
        ]];
        foreach ($mens as $men) {
        Post::create($men);           
        }
        dd('CREATE METHOD');
    }

    public function ReadAll(){
        foreach (Post::all() as $post) {
            echo '<pre>'. $post;
        }
    }
    public function GetById(){
       $people = Post::find(4);
       return $people;
    }
    public function Update(){
        $search = Post::find(2);
        $search->update([
            'name'=>'UUU',
            'lastname'=>'UUU',
            'age'=>22
        ]);
        dd('Update');
    }
    public function Delete(){
        $post = Post::find(3);
        $post->delete();
        dd('Delete record');
    }
    public function Restore(){
        $post = Post::withTrashed()->find(3);
        $post->restore();
        dd('Restore record');
    }
    public function first_create(){
            $post = Post::firstOrCreate([
                'name'=>'QQQ'
            ],[
                'name'=>'QQQ',
                'lastname'=>'sssss',
                'age'=>29
            ]);
            dd($post->name,
            $post->lastname,
            $post->age);
        }

        public function update_create(){
            $post = Post::updateOrCreate([
                'name'=>'QQQ'
            ],[
                'name'=>'QQQ',
                'lastname'=>'NNNN',
                'age'=>48
            ]);
            dd($post->name,
            $post->lastname,
            $post->age);
        }
}
