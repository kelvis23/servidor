<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Log;

class FlightApiController extends Controller
{
    public function info()
    {
        $flight = Flight::all();
        if ($flight != null) {
            return response()->json([
                "message" => "ok",
                "data" => $flight
            ]);
        } else {
            return response()->json([
                "message" => "flight not found",
                "data" => "null"
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }



    public function show(string $id)
    {
        $flight = Flight::find($id);
        if ($flight != null) {
            return response()->json([
                "message" => "ok",
                "data" => $flight
            ]);
        } else {
            return response()->json([
                "message" => "flight not found",
                "data" => "null"
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }

    public function store(Request $request)
    {
        $errors = false;

        Log::channel('stderr')->info("VARIABLES DEL REQUEST: ", [
            $request->code,
            $request->origin,
            $request->destination

        ]);


        //validaciones:
        if (!isset($request->code)) {
            $errors = true;
        } elseif (!isset($request->origin)) {
            $errors = true;
        } elseif (!isset($request->destination)) {
            $errors = true;
        }
        if (!$errors) {
            $flight = new Flight($request->all());
            //todo ver si existe el email
            $flight->save();
            return response()->json([
                "message" => "ok",
                "data" => $flight
            ]);
        } else {
            return response()->json([
                "message" => "flight not found",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }

    public function showcode(Request $request)
    {

        Log::channel('stderr')->debug("VARIABLES DE BÚSQUEDA", [$request->code]);

        if (isset($request->code)) {
            $flight = Passenger::where('name', $request->name)->get();
            return response()->json([
                "message" => "ok",
            ]);
        } else {
            return response()->json([
                "message" => " not found",
                "data" => "null"
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }
   
}