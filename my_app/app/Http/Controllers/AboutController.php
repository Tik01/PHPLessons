<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
public function index(){

    return view('about');
}

}
