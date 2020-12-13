<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Newcontr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('poetas')
        ->orderBy('idPoeta')
        ->get();
        return view('crud.showUsuarios',[
            'usuarios' => $user,
            'title' => 'tabla usuarios',
            'year'=> 2020,
            'autor'=> 'Yael Payan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.altaUsuarios',[
            'title' => 'tabla usuarios',
            'year'=> 2020,
            'autor'=> 'Yael Payan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = DB::table('poetas')
        ->insert([
            'nombre'=> $request->input('nombre'),
            'apellido'=> $request->input('apellido'),
            'direccion'=> $request->input('direccion'),
            'cp'=> $request->input('cp'),
            'numero'=> $request->input('numero')
        ]);
        return redirect()->action('Newcontr@index')
        ->with('status','poeta creado exitosamente');;
    }

    public function show($id)
    {
        $user=DB::table('poetas')
        ->where('idPoeta','=',$id)
        ->first();
        return view('crud.altaUsuarios',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = DB::table('poetas')
        ->where('idPoeta','=', $request->input('id'))
        ->update([
            'nomnbre'=> $request->input('nombre'),
            'apellido'=> $request->input('apellido'),
            'direccion'=> $request->input('direccion'),
            'cp'=> $request->input('cp'),
            'numero'=> $request->input('numero')
        ]);
        return redirect()->action('Newcontr@index')
        ->with('status','Poeta modificado exitosamente');
    }

    public function destroy($id)
    {
        $user = DB::table('usuarios')
        ->where('idPoeta','=', $id)
        ->delete();
        return redirect()->action('Newcontr@index')
        ->with('status','Poeta Eliminado exitosamente');
    }
}
