<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
          /*   'id_cargo_usuario' => 'required', */
            'estado_usuario' => 'required'
        ]);

        $newUser= new User([
            'NOMBRES_USUARIO' => $request->nombres_usuario,
            'APELLIDOS_USUARIO' => $request->apellidos_usuario,
            'EDAD_USUARIO' => $request->edad_usuario,
            'TELEFONO_USUARIO' => $request->telefono_usuario,
            'CORREO_USUARIO' =>$request->correo_usuario,
            'CLAVE_USUARIO' => $request->clave_usuario,
           /*  'ID_CARGO_USUARIO' => $request->id_cargo_usuario, */
            'ESTADO_USUARIO' => $request->estado_usuario
        ]);

        $newUser->save();
        return redirect()->route('login')->with('success','Registro exitoso');
    }

    public function login_inicio(Request $request){
        $request->validate([
           'correo_usuario' => 'required',
           'clave_usuario' => 'required',
       ]);

       $credentials = $request->only('CORREO_USUARIO', 'CLAVE_USUARIO');

       if (Auth::attempt($credentials)) {
           // Authentication passed...
           return redirect()->intended('inicio_interno');
       }

       return back()->withErrors('pasword','Has ingresado mal el usuario o contraseña');
   }

    public function register_action(){

        return "Hello world";

    }




}






























//Hola profes que sepan que no los quiero volver a ver
