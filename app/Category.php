<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Category;



class Category extends Model
{
    public function posts(){
        // return $this->hasMany('App/Post');
        return $this->hasMany(Post::class);
    }
}
