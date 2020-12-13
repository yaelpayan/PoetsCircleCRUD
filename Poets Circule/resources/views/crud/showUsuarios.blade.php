@extends('layouts.masterContent')
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','Nosotros')
@section('content')
<a href="{{action('Newcontr@create')}}">agregar nuevo usuario</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">CP</th>
      <th scope="col">Numero</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $user)
    <tr>
      <th scope="row">{{$user->idPoeta}}</th>
      <td>{{$user->nombre}}</td>
      <td>{{$user->apellido}}</td>
      <td>{{$user->direccion}}</td>
      <td>{{$user->cp}}</td>
      <td>{{$user->numero}}</td>
      <td><a href="{{action('Newcontr@show',['id'=>$user->idPoeta])}}">Actualizar</a></td>
      <td><a href="{{action('Newcontr@destroy',['id'=>$user->idPoeta])}}">Eliminar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
@section('footer')
@parent
@stop