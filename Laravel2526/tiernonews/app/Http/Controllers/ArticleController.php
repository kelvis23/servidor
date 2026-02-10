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
         $article = Article::all();;
        //2. devolver  una vista que los contenga
        return view('article.index', compact("article"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $journalists = Journalist::all();
        return view('article.create',compact('journalists'));
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
    public function show(Article $article)
    {
          $article = Article::find($article);

        //2 devuelbe una bista con la informasion del periodista 
        return view('article.show', compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
