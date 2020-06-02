<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','password'];
    protected $guarded = ['created_at','updated_at'];
}
    
