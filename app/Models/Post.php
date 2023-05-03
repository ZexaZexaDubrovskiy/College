<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $table = 'posts';
    protected $guarded = false;

    public function photos()
    {
        return $this->belongsToMany(PostPhoto::class, 'post_photos', 'post_id', 'photo_id');
    }
}
