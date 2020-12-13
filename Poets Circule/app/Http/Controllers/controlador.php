<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function login(){
        return view('login',[
            'title'=>'Inicia Sesion'
        ]);
    }

    public function validacion(Request $request){
        $user = $request->input('user');
        $pass = $request->input('pass');
         if($user==='RaulToledo'){
             if($pass==='12345'){
                 return view('inicio',[
                     'title'=>'INICIO DE SESION EXITOSO',
                     'user'=>$user
                 ]);
             }
             else{return view('login',[
                 'title'=>'Datos incorrectos, Verificalos'
             ]);}
         }
         else{return view('login',[
            'title'=>'Datos incorrectos, Verificalos'
        ]);}
    }



}
