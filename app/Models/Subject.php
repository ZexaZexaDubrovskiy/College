<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = false;

//    public function myUsers(){
//        return $this->belongsTo(User::class, 'user_id', 'id');
//    }
}
