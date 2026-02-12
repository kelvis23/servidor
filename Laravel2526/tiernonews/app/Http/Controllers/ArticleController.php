<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Journalist;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        ;
        //2. devolver  una vista que los contenga
        return view('article.index', compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $journalists = Journalist::all(); // Obtener todos los periodistas
        return view('article.create', compact('journalists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'readers' => 'required|integer',
            'journalist_id' => 'required|exists:journalists,id'
        ]);

        $a = new Article($request->all());

        $a->save();
        return redirect()->route('article.index')
            ->with('success', 'Artículo guardado correctamente');
    }




    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {

        //2 devuelbe una bista con la informasion del periodista 
        return view('article.show', compact("articles"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        // Pasamos el artículo a la vista
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // Validamos solo los campos que se pueden actualizar
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'readers' => 'required|integer',
        ]);

        // Asignamos los campos manualmente
        $article->title = $request->title;
        $article->content = $request->content;
        $article->readers = $request->readers;

        // Guardamos cambios
        $article->save();
        return redirect()->route('article.index')
            ->with('success', 'Artículo actualisado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete(); // Elimina el artículo
        return redirect()->route('article.index')
            ->with('success', 'Artículo eliminado correctamente');
    }
}
