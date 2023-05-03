<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Post;
use App\Models\PostPhoto;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::findOrFail($id);

        $allPostPhoto = PostPhoto::all();
        $photos = array('items' => array());
        foreach($allPostPhoto as $postPhoto){

            if ($postPhoto['post_id'] == $post['id']) {
                array_push($photos['items'], DB::table('photos')->where('id', $postPhoto['photo_id'])->first());
            }
        }

        //$photos = DB::table('photos')->limit(5)->get();

        return view('post.show', compact('post'), compact('photos'));
    }

}
