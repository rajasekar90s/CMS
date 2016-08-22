<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostForm extends Model
{
    protected $table='post_forms';
    protected $fillable = ['category_drop','title','images','comments','tags'];
}
