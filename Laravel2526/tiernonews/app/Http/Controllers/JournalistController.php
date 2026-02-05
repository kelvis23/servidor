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
        return view('journalist.index', compact("journalists"));
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
        //use iluminates /suport/facades/Log
        //para 
        //equibalente a $se
        //Log::channel('stderr')->debug("Varible request:",[$request->all() ]);
        $j = new Journalist($request->all());
        Log::channel('stderr')->debug("Varible request:", [$j->email]);
     
        //antes de guardar en la db : validacion 
        $request->validate([
            'name '=> 'required',
            'password '=> 'min:4|required',
            'email '=> 'unique:journalists,email|required'
        ]);
     
        //con la suiente orden se guarda en la db
        $j->save();
        //para crear el index tengo que buscar todos los periodistas en la db
        //$journalists = Journalist::all();
        //return view('journalist.index', compact("journalists"));

        return redirect()->route('journalist.create');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        //busco en la base de datos ese periodista
        $journalist = Journalist::find($id);

        //2 devuelbe una bista con la informasion del periodista 
        return view('journalist.show', compact("journalist"));

    }

    /**
     * Show the form for editing the journalist.
     * va a devolver un vista con un formulario rellenado con los datos del preiodista en cuestion y un boton de actualizar
     */
    public function edit(string $id)
    {
        // 1. buscar el periodista en la db :

        $journalist = Journalist::find($id);

        //2. devuelvo   la vista con  el furmulario  de edicion
        return view('journalist.edit', compact("journalist"));

    }

    /**
     * Update the specified resource in storage.
     * Recivir en la peticion Post (o Put ) los datos  del periodista que queremos editar y lo lleva a la dbb
     */
    public function update(Request $request, string $id)
    {
        // voy a actulizar todo menos la contraseña 
        //busco en la bd el journalist con ese id
        $journalist = Journalist::find($id);

        //2. actulaiso los campos xorrespondientes 
        $journalist->name = $request->name;
        $journalist->surname = $request->surname;
        $journalist->email = $request->email;

        //3. hago el update
        $journalist->update();

        //4. devuelvo al show
        //lo voy a buscar pero solo para comprar que se ha actulisar


        return view('journalist.show', compact("journalist"));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //1.  busco el journalist que voy a eliminar 
        $j = Journalist::find($id);
        if ($j == null) {
            $message = " el periodista no existe ese id";
        } else {


            //2. eliminamos
            Journalist::destroy($id);
            $message = " Periodista ".$j->name ."eliminado ";

        }
        //3. devolvemos al index 
        return redirect()->route('journalist')->with('deleted',$message);

    }
    public function sayName($name)
    {
        return "hola $name";
    }
}
