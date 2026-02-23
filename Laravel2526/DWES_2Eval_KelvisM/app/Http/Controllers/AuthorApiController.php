<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorApiController extends Controller
{
    // Listar todos los authors con sus posts y comentarios
    public function index()
    {
        $authors = Author::with('posts.comments')->get();
        return response()->json(['data' => $authors]);
    }

    // Mostrar un author por id
    public function show($id)
    {
        $author = Author::with('posts.comments')->find($id);
        if (!$author) {
            return response()->json(['data' => null, 'message' => 'Author not found'], 404);
        }
        return response()->json(['data' => $author]);
    }

    // Crear un nuevo author
    public function store(Request $request)
    {
        try {
            $author = Author::create($request->all());
            return response()->json(['data' => $author, 'message' => 'Author created'], 201);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'message' => 'Not created'], 400);
        }
    }

    // Actualizar un author existente
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['data' => null, 'message' => 'Author not found'], 404);
        }

        $author->update($request->all());
        return response()->json(['data' => $author, 'message' => 'Author updated']);
    }

    // Eliminar un author
    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['data' => null, 'message' => 'Author not found'], 404);
        }

        $author->delete();
        return response()->json(['data' => null, 'message' => 'Author deleted']);
    }

    // Incrementar la edad de todos los authors
    public function incrementAge($years)
    {
        Author::query()->increment('age', $years);
        $authors = Author::all();
        return response()->json(['data' => $authors]);
    }
}