<?php

namespace App\Services\Post;

use App\Models\Photo;
use App\Models\Post;
use App\Models\PostPhoto;
use Illuminate\Support\Facades\DB;

class Service {

    public function store($data){
        //создание нового поста
        $dataFromPost = $data;
        unset($dataFromPost["photos"]);
        Post::create($dataFromPost);

        $lastId = DB::table('posts')->latest("id")->first();
        if ($lastId == null) {
            $preId = 1;
        } else {
            $preId = $lastId->id;
        }

        foreach ($data['photos'] as $file){
            //функционал для добавления фото в таблицу photos
            $filecontent = array(
                'url' => $file->openFile()->fread($file->getSize())
            );
            Photo::create($filecontent);

            //получение последней записи таблицы photos
            $lastIdPhoto = DB::table('photos')->latest("id")->first();

            //добавление в смежную таблицу записей связки поста и фоток
            $postPhotoId = array(
                'post_id' => $preId,
                'photo_id' => $lastIdPhoto->id,
            );
            PostPhoto::create($postPhotoId);
        }
    }

    public function update($post, $data){
        //обновление поста
        $dataFromPost = $data;
        if (count($data) == 5)
            unset($dataFromPost["photos"]);
        $post->update($dataFromPost);

        if (count($data) == 5) {
            //добавление связей в таблицу и фото
            foreach ($data['photos'] as $file) {
                //функционал для добавления фото в таблицу photos
                $filecontent = array(
                    'url' => $file->openFile()->fread($file->getSize())
                );
                Photo::create($filecontent);

                //получение последней записи таблицы photos
                $lastIdPhoto = DB::table('photos')->latest("id")->first();

                //добавление в смежную таблицу записей связки поста и фоток
                $postPhotoId = array(
                    'post_id' => $post['id'],
                    'photo_id' => $lastIdPhoto->id,
                );
                PostPhoto::create($postPhotoId);
            }
        }
    }
}
