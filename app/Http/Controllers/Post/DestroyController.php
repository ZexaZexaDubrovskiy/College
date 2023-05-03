<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostPhoto;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::findOrFail($id);

        //удалить из смежной таблицы записи
        $allPostPhoto = PostPhoto::all();
        foreach($allPostPhoto as $postPhoto){
            if ($postPhoto['post_id'] == $post['id']) {
               $deletePostPhoto = PostPhoto::findOrFail($postPhoto['id']);
                $deletePostPhoto->delete();
            }
        }
        //DB::table('photos')->where('id', $postPhoto['photo_id'])->first()

        $post->delete();
        return redirect()->route('post.index');
    }
}
