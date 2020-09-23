<?php

namespace App\Http\Controllers;

use App\Proceso;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    /*public function saluda($name)
    {
    	return view( 'usuario', ['name' => 'prueba']);
    }*/

    public function show ($name)
    {
    	//$users = \DB::table('procesos')->where('proceso_mes', $name)->first();
    	$users = Proceso::where('proceso_mes', $name)->firstOrFail();

    	/*if (! $users) {
    		abort(404);
    	}*/

    	//dd($users); 
    	//return view('usuario', ['users' => $users]);
    	return view('usuario', ['users' => Proceso::where('proceso_mes', $name)->firstOrFail()]);
    }

}
