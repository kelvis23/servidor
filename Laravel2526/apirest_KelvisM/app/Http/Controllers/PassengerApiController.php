<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PassengerApiController extends Controller
{
    public function delete(string $id)
    {
        $p = Passenger::find($id);
        if ($p != null) {

            $p->delete();
            return response()->json([
                "menssage" => "ok",
                "data" => $p
            ]);
        } else {
            return response()->json([
                "menssage" => "passenger not deleted",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }
    public function update(Request $request,string $id)
    {
        $p = Passenger::find($id);
        if ($p != null) {
            $p->name = $request->name;
            $p->surname = $request->surname;
            $p->age = $request->age;
            $p->nationality = $request->nationality;
            //3. hago el update
            $p->update();
            return response()->json([
                "menssage" => " ok",
                "data" => $p
            ]);
        } else {
            return response()->json([
                "menssage" => "Not update",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }

    }
     public function infoage(Request $request)
    {

        if (isset($request->minage) && isset($request->maxage)) {
            $p = Passenger::where('age','>=',$request->minage)
            ->where('age','<=',$request->maxage)->get();
            return response()->json([
              "message" => "ok",
              "data" => $p

            ]);
        }else{
              return response()->json([
                "message" => "no passenger not found",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }

    }
        

}


