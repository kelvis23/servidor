<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    /*
    private int $id;
    private string $name;
    private string $surname;
    private string $email;
    private string $password;
*/
    //aqui declaramos los atributos del modelo para que puesdan ser  rellenados 
//automaticamente llenar ka vase de datos
// este fillable lo que hace es crear un costructor  que recibe 
    protected $fillable = ["id", "name", "surname","email" ,"password"];
    //si la tabla se    llamara diferente al modelo  enplurl
    // proteected $table   = periodistas

    // un periodista tiene varios articulos (1-n)

    public  function articles(){
        return $this->hasMany(Article::class);
    }


}

