<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function register(){
        $data['title']='register';
        return view('exterior.login',compact('data'));

    } 

    public function register_inicio(Request $request){
         $request->validate([
            'nombres_usuario' => 'required',
            'apellidos_usuario' => 'required',
            'edad_usuario' => 'required',
            'telefono_usuario' => 'required',
            'correo_usuario' => 'required|unique:users',
            'clave_usuario' => 'required',
            'clave_usuario_confirm' => 'required|same:clave_usuario',
            'id_cargo_usuario' => 'required',
            'estado_usuario' => 'required'
        ]);
        $newUser= new User([
            'nombres_usuario' => $request->nombres_usuario,
            'apellidos_usuario' => $request->apellidos_usuario,
            'edad_usuario' => $request->edad_usuario,
            'telefono_usuario' => $request->telefono_usuario,
            'correo_usuario' =>$request->correo_usuario,
            'clave_usuario' => $request->clave_usuario,
            'id_cargo_usuario' => $request->id_cargo_usuario,
            'estado_usuario' => $request->estado_usuario
        ]);

        $newUser->save();
        return redirect()->route('login')->with('success','Registration Success. Plis Login!');
    }

    public function register_action(){

        return "Hello world";


    }



   
}
