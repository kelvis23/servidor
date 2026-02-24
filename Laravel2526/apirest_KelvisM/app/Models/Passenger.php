<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
   protected $fillable = ['id', 'name', 'surname', 'age','nationatlity'];
    public function flight(){
        return $this->belongsTo(Flight::class);
    } 
}
