@extends('layouts.masterContent')
@if(isset($user) and is_object($user))
    @php
        $title='modificacion de poeta';

        $id= $user->idPoeta;
        $nombre= $user->nombre;
        $apellido= $user->apellido;
        $direccion= $user->direccion;
        $cp= $user->cp;
        $numero= $user->numero;


        $Boton = 'Actualizar';
    @endphp
@else
    @php
        $title='Alta de un usuario';

        $id= "";
        $nombre= "";
        $apellido= "";
        $direccion= "";
        $cp= "";
        $numero= "";

        $Boton = 'Insertar';
    @endphp
@endif

    
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','Nosotros')
@section('content')



<center>
<form action="{{isset($user) ? action('Newcontr@update') :action('Newcontr@store')}}" method="post">

{{csrf_field()}}
@if(isset($user) and is_object($user))
<input type='hidden' name='id' value='{{$id}}'/>
@endif
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value='{{$nombre}}'>
<br>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" value='{{$apellido}}'>
<br>
<label for="direccion">Direccion</label>
<input type="text" name="direccion" value='{{$direccion}}'>
<br>
<label for="cp">Codigo postal</label>
<input type="text" name="cp" value='{{$cp}}'>
<br>
<label for="numero">Numero</label>
<input type="text" name="numero" value='{{$numero}}'>
<br>
<input type="submit"value="{{$Boton}}">
</form>
</center>

@stop
@section('footer')
@parent
@stop