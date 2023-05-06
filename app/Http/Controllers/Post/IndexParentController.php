<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexParentController extends Controller
{
    public function __invoke($whom)
    {
        $posts = Post::all();
        return view('post.indexParent', compact('posts'), compact('whom'));
    }
}
