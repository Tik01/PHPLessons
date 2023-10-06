<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
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
}
