@extends('layouts.master')
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','Cerrar sesion')
@section('content')

<h2><center><br> ¡HEY!, Bienvenido {{$user}}</center></h2>
<h2><center> A tu izquierda encontraras una barra lateral<br> donde podras seleccionar el pintor de tu eleccion <br><br><hr> </center></h2>
 @stop
@section('footer')
<h1 id="footer">Derechos reservados {{date('Y')}}</h1>
@stop