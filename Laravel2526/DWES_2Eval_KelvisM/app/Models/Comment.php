<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        protected $comment= ['conted'];
           public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
