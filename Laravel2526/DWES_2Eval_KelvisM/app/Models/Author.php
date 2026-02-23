<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected  $autor = ['nmae','email','age'];
    public function posts(){
                return $this->hasMany(Post::class);

    }
}
