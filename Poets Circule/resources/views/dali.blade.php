@extends('layouts.masterContent')
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','Nosotros')
@section('content')
<p>
        Salvador Felipe Jacinto Dalí i Domènech,​ marqués de Dalí de Púbol (Figueras, 11 de mayo de 1904-ibídem, 23 de enero de 1989), fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo.

Salvador Dalí es conocido por sus impactantes y oníricas imágenes surrealistas. Sus habilidades pictóricas se suelen atribuir a la influencia y admiración por el arte renacentista. También fue un experto dibujante.​ Los recursos plásticos dalinianos también abordaron el cine, la escultura y la fotografía, lo cual le condujo a numerosas colaboraciones con otros artistas audiovisuales. Tuvo la capacidad de acrisolar un estilo genuinamente personal y palpable al primer contacto, que en realidad era muy ecléctico y que «succionó» de innovaciones ajenas. Una de sus pinturas más célebres es La persistencia de la memoria (también conocida como Los relojes blandos), realizada en 1931.
    
<img src="images/dali.jpg" alt=""></p>
    <table class="pintores">
        <tr>
            <th class="separacion"><h4>La persistencia de la memoria</h4></th>
            <th> <img src="images/salvador1.jpg" alt="" id="sal1"></th>
        </tr>
        <tr>
            <th>   <img src="images/salvador2.jpg" alt="" id="sal2"></th>
            <th><h4>Jirafa en llamas</h4></th>
        </tr>
        <tr>
            <th><h4>Muchacha en la ventana</h4></th>
            <th><img src="images/salvador3.jpg" alt="" id="sal3"></th>
        </tr>
        <tr>
            <th><img src="images/salvador4.jpg" alt="" id="sal4"></th>
            <th><h4>vilabertran dali</h4></th>
        </tr>
        <tr>
            <th><h4>La Cara de la Guerra</h4></th>
            <th><img src="images/salvador5.jpg" alt="" id="sal5"></th>
        </tr>
        
    </table>


 @stop
@section('footer')
@parent
@stop