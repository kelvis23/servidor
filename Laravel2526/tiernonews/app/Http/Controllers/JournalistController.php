<?php

namespace App\Http\Controllers;

use App\Models\Journalist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function Illuminate\Log\log;

class JournalistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //todo
        // return "estoy en el index del JournalistController";

        //1. buscar todos los journalists de la bd

        $journalists = Journalist::all();
       // return $journalists;
        //2. devolver  una vista que los contenga
        return view('journalist.index',compact("journalists"));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('journalist.create');
        // devuelvo una vista con un formulario de creasion
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return "ahora te lo guardo";
       Log::channel('stderr')->debug("Varible request:",[$request->name ,$request->password]);
      // $j = new Journalist();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "no esta heco";
        //
    }

    /**
     * Show the form for editing the journalist.
     * va a devolver un vista con un formulario rellenado con los datos del preiodista en cuestion y un boton de actualizar
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Recivir en la peticion Post (o Put ) los datos  del periodista que queremos editar y lo lleva a la dbb
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function sayName($name)
    {
        return "hola $name";
    }
}
