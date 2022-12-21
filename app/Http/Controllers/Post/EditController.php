<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }
}
