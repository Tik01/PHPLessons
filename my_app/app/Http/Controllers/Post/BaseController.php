<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\Post;
use App\Services\Post\Service as PostService;
use Service;

class BaseController extends Controller
{
    public $service;
    public function __construct(PostService $service)
    {
       $this->service = $service; 
    }
}
