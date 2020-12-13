@extends('layouts.masterlogin')
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','')
@section('content')

<center>
<form action="{{action('controlador@validacion')}}" method="post">
{{csrf_field()}}
<label for="user">Usuario</label>
<input type="text" name="user">
<br>
<label for="pass">Contraseña</label>
<input type="password" name="pass">
<br>
<input type="submit"value="Iniciar sesion">
</form>
</center>

 @stop
@section('footer')
<h1 id="footer">Derechos reservados {{date('Y')}}</h1>
@stop