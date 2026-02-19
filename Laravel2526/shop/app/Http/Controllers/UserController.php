<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        //retonas la vista de 'dashboard' con los datos del usuarios registrado para poder editarlo 
        //la vista tiene un boton  de aculisar 
    }
    

   
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
}
