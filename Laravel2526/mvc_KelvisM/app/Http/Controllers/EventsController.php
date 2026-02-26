<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\User;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public  function create(){
         $users =User::all();
         $event =Events::all();
        return view('event.create',compact('users', 'event'));
    }

     public  function store( Request $request){
              $request->validate([
            'title' => 'required'
              ])  ;
              $e = new Events($request->all());
              $e->save();
         return redirect()->route('user')
            ->with('success', 'Artículo guardado correctamente');
         }
}
