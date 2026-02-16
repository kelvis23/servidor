<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Date;
use Exception;
use Illuminate\Http\Request;
use Log;
use Symfony\Component\HttpFoundation\JsonResponse;

class OrderApiController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        if ($orders != null) {
            return response()->json([
                "message" => "ok",
                "data" => $orders
            ]);
        } else {
            return response()->json([
                "message" => "ok",
                "data" => $orders
            ], JsonResponse::HTTP_NOT_FOUND);   //404
        }
    }

    public function store(Request $request)
    {
        $date = Carbon::now();
        if ($request->exists('date')) {
            $date = $request->date;
        }
        Log::channel('stderr')->info("STORE", [$request->all()]);
        try {
            $order = Order::create($request->all());
            return response()->json([
                "message" => "OK",
                "data" => $order
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => "ERROR"/* . $e->getMessage()*/,
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }

    public function destroy(string $id)
    {
        $order = Order::find($id);
        if ($order != null) {
            Order::destroy($id);
            return response()->json([
                "message" => "OK",
                "data" => $order
            ]);
        } else {
            return response()->json([
                "message" => "ERROR",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }
}
