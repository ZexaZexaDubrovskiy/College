<?php

namespace App\Http\Controllers\PostPhoto;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Post;
use App\Models\PostPhoto;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $photo = Photo::findOrFail($id);

        //удалить из смежной таблицы записи
        $allPostPhoto = PostPhoto::all();
        foreach($allPostPhoto as $postPhoto){
            if ($postPhoto['photo_id'] == $photo['id']) {
                $deletePostPhoto = PostPhoto::findOrFail($postPhoto['id']);
                $deletePostPhoto->delete();
                $deletePhoto = Photo::where('id', '=', $postPhoto['photo_id'])->first();
                $deletePhoto->delete();
                $id = $postPhoto['post_id'];
            }
        }

        //обновление страницы
        $post = Post::findOrFail($id);

        $allPostPhoto = PostPhoto::all();
        $photos = array('items' => array());
        foreach($allPostPhoto as $postPhoto){
            if ($postPhoto['post_id'] == $post['id']) {
                array_push($photos['items'], DB::table('photos')->where('id', $postPhoto['photo_id'])->first());
            }
        }

        return view('post.edit', compact('post'), compact('photos'));
    }
}
