<?php

namespace App\Http\Controllers;

use App\Models\Journalist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
        $j = new Journalist($request->all());
        $j->save();
        return response()->json($j);

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
        }else{
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
        }else{
            return response()->json([
                "menssage" => "Not found",
                "data" => $j
            ], JsonResponse::HTTP_NOT_FOUND);
        }
      
    }
}
