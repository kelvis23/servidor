<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Journalist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Log;

class JournalistApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     * Devulve JSON con el JOurnalist creado
     * $request contiene la eticion POSR
     */
    public function store(Request $request)
    {
          $errors = false;
        
              Log::channel('stderr')->info("VARIABLES DEL REQUEST: ", [
            $request->password,
            $request->name,
            $request->title
        ]);
         
        //validaciones:
        if (!isset($request->name)) {
            $errors = true;
        } elseif (!isset($request->password)) {
            $errors = true;
        }
        if (!$errors) {
            $j = new Journalist($request->all());
            //todo ver si existe el email
            $j->save();
            return response()->json($j);
        } else {
            return response()->json([
                "message" => "error",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //1. Busco  el  journalist con ese id 

        $j = Journalist::find($id);
        if ($j != null) {
            //2. lo dbuelvoen formato json
            return response()->json([
                "menssage" => " Journalist found",
                "data" => $j
            ]);
        } else {
            return response()->json([
                "menssage" => "Not found",
                "data" => $j
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $j = Journalist::find($id);

        //2. actulaiso los campos xorrespondientes 
        if ($j != null) {
            $j->name = $request->name;
            $j->surname = $request->surname;
            $j->email = $request->email;
            //3. hago el update
            $j->update();
            return response()->json([
                "menssage" => " Journalist found",
                "data" => $j
            ]);
        } else {
            return response()->json([
                "menssage" => "Not found",
                "data" => $j
            ], JsonResponse::HTTP_NOT_FOUND);
        }

    }

    /**
     * Remove the specified resource from storage.
     * cuando lo elimino devuelbo el cod 200 y el json  con el periodista 
     * si no existe es id cod 404
     */
    public function destroy(string $id)
    {
        $j = Journalist::find($id);
        if ($j != null) {

            $j->delete();
            return response()->json([
                "menssage" => "  Deleted",
                "data" => $j
            ]);
        } else {
            return response()->json([
                "menssage" => "Not found",
                "data" => $j
            ], JsonResponse::HTTP_NOT_FOUND);
        }

    }

     //Para las búsquedas:
    public function search(Request $request){
        Log::channel('stderr')->debug("VARIABLES DE BÚSQUEDA", [$request->name]);
   
        //Buscar por nombre en la base de datos:
        // SELECT * FROM journalists WHERE name = ?
      /*  if (isset($request->name)) {
            $journalists = Journalist::where('name', $request->name)->get();
            return response()->json($journalists);
        }

        //buscar por email:
        if (isset($request->email)) {
            $journalists = Journalist::where('email', $request->email)->get();
            //Log::channel('stderr')->debug("VARIABLES DE BÚSQUEDA", [$request->email]);
            return response()->json($journalists);
        }*/

        if (isset($request->minreaders) && isset($request->maxreaders)) {
            //AND con varias cláusulas del select
            $articles = Article::where('readers', '>=', $request->minreaders)
                ->where('readers', '<=', $request->maxreaders)
                ->get();
            return response()->json($articles);
        } else if (isset($request->minreaders)) {
            //Quiero devolver los artículos que tengan más de $request->minreaders readers
            $articles = Article::where(
                'readers',
                '>=',
                $request->minreaders
            )->get();
            return response()->json($articles);
        }

        //buscar periodistas por nombre Y por email
        //.../search?name=XXXXX&email=YYYYYY
        

        //buscar periodistas por nombre O por apellido (->orWhere)
        //.../search?name=XXXXX&surname=YYYYYY

    }


}
