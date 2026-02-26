<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){
        $user= User::all(); 
        return view("index",compact("user"));
    }
     public function destroy (string $id){
         $user = User::find($id);
        

            //2. eliminamos
            USer::destroy($id);
            $message = $user->name ."eliminado junto con sus  eventos".$user->events();

        
        //3. devolvemos al index 
        return redirect()->route('user')->with('deleted',$message);
    }
}
