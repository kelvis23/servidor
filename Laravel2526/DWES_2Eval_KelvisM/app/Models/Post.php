<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $post= ['title','content'];

      // Un post pertenece a un author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
        // Un post tiene muchos comments
    function  comments(){
        return $this->hasMany(Comment::class);
        }    
}
