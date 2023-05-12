<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HtmlTable extends Model
{
    use HasFactory;
    protected $table = 'html_table';
    protected $guarded = false;
}
