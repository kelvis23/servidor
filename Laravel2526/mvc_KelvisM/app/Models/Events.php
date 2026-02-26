<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
      protected $fillable = ['id','title','description','duration','start','visibility',"user_id"];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
