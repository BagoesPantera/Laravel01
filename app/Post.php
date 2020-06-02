<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','image','content'];
    protected $guarded = ['created_at','updated_at'];
}
