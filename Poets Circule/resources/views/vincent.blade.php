@extends('layouts.masterContent')
@section('title',$title)
@section('header')
<h1>{{$title}}</h1>
@stop
@section('navbar1','Principal')
@section('navbar2','Nosotros')
@section('content')
<p>
        Vincent Willem van Gogh (30 de marzo de 1853-Auvers-sur-Oise, 29 de julio de 1890) fue un pintor neerlandés, uno de los principales exponentes del postimpresionismo.​
        La calidad de su obra fue reconocida solo después de su muerte, en una exposición retrospectiva en 1890, considerándose en la actualidad uno de los grandes maestros de la historia de la pintura. Influyó grandemente en el arte del siglo XX, especialmente entre los expresionistas alemanes y los fauvistas como Matisse, Derain, Vlaminck y Kees Van Dongen. Falleció a los 37 años por una herida de bala de pistola; aún no se sabe con seguridad si fue un suicidio o un homicidio involuntario. A pesar de que existe una tendencia general a especular que su enfermedad mental influyese en su pintura, el crítico de arte Robert Hughes cree que las obras del artista están ejecutadas bajo un completo control; de hecho, el pintor jamás trabajó en los periodos en los que estaba enfermo.
    
<img src="images/vince.jpg" alt=""></p>
    <table class="pintores">
        <tr>
            <th><h4>La Habitación de Vincent en Arles</h4></th>
            <th> <img src="images/vince1.jpg" alt="" id="vi1"></th>
        </tr>
        <tr>
            <th>   <img src="images/vince2.jpg" alt="" id="vi2"></th>
            <th><h4>La noche estrellada</h4></th>
        </tr>
        <tr>
            <th><h4>Los comedores de patatas</h4></th>
            <th><img src="images/vince3.jpg" alt="" id="vi3"></th>
        </tr>
        <tr>
            <th><img src="images/vince4.jpg" alt="" id="vi4"></th>
            <th><h4>El café de noche</h4></th>
        </tr>
        <tr>
            <th><h4>Autorretrato con la oreja vendada</h4></th>
            <th><img src="images/vince5.jpg" alt="" id="vi5"></th>
        </tr>
        
    </table>


 @stop
@section('footer')
@parent
@stop