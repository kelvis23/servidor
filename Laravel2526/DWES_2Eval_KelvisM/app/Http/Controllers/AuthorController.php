<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('index', compact('authors'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Author::create($request->all());
        return view('index');
    }

    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('index');
    }
}