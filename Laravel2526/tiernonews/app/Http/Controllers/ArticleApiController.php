<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
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

    // eliminar los articulos que tenga entre min y max reades
    // para elimiar quiero  hacer un http delete 
//  http://127.0.0.1:8000/api/delete?minReaders=5maxReraders=9
//o esto http://127.0.0.1:8000/api/delete?maxReraders=9 en este caso se elimina todoss los articulos de los readers indicados en miReaders  
//

    public function deleteByReaders(Request $request)
    {
        //1 comprueba si ejesten los parametros de la url
        if (isset($request->maxReaders)) {
            $minReaders = -1;
            if (isset($request->minReaders)) {
                $minReaders = $request->minReaders;
            }
            //2 creo y lanso la consulta sql con where
            $number = Article::where('readers', '>=', $minReaders)
                ->where('readers', '<=', $request->maxReaders)
                ->count();
            Article::where('readers', '>=', $minReaders)
                ->where('readers', '<=', $request->maxReaders)
                ->delete();

            //3 devuelvo un jso con la cantidad de articulos eliminados en un jeson tipo 
            /*  {
                  "message": "deleted",
                  "data": "3"
              }  */
            return response()->json([
                "message" => "deleted",
                "data" => $number
            ]);
        }
    }
}
